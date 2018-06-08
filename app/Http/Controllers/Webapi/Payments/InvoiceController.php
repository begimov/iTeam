<?php

namespace App\Http\Controllers\Webapi\Payments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Transformers\Users\BusinessEntityTransformer;
use App\Repositories\Contracts\Users\BusinessEntityRepository;
use App\Repositories\Contracts\Products\OrderRepository;

use App\Http\Requests\Webapi\Payments\InvoiceStoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use App\Repositories\Eloquent\Criteria\With;

class InvoiceController extends Controller
{
    protected $businessEntities;

    protected $orders;

    public function __construct(BusinessEntityRepository $businessEntities, OrderRepository $orders)
    {
        $this->businessEntities = $businessEntities;
        $this->orders = $orders;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $businessEntities = $this->businessEntities->get();

        return fractal()
            ->collection($businessEntities)
            ->transformWith(new BusinessEntityTransformer)
            ->toArray();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoiceStoreRequest $request, $orderId)
    {
        list($data, $order, $businessEntity) = $this->prepareInvoiceData($request, $orderId);

        Storage::makeDirectory($directory = config('orders.invoices.storage_dir_prefix') . Auth::id());

        \PDF::loadView('payments.invoice.pdf', compact('data', 'order', 'businessEntity'))
            ->save(storage_path('app/' . $directory . '/' . $fileName = $this->getInvoiceFilename($order->id)));

        return response()->json([
            'url' => route('orders.invoices.show', $fileName)
        ]);
    }

    public function show($fileName)
    {
        $path = config('orders.invoices.storage_dir_prefix') . Auth::id() . '/' . $fileName;

        if (!Storage::disk('local')->exists($path)) {
            abort(404);
        }

        return response()->download(
            storage_path('app/' . $path), 
            $fileName, 
            [
                "Content-Type" => Storage::disk('local')->mimeType($path)
            ]
        );
    }

    protected function prepareInvoiceData($request, $orderId)
    {
        $data = $request->all();

        $order = $this->orders->withCriteria([
            new With(['product'])
        ])->findById($orderId);

        $businessEntity = $this->businessEntities->findById($data['company']['business_entity_id']);

        return [
            $data, $order, $businessEntity
        ];
    }

    protected function getInvoiceFilename($orderId)
    {
        return generateOrderNumber($orderId) . config('orders.invoices.pdf_filename_postfix');
    }
}
