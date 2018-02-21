<?php

namespace App\Http\Controllers\Webapi\Products;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Products\Order;

use App\Transformers\Products\OrderTransformer;

use App\Repositories\Contracts\Products\OrderRepository;
use App\Repositories\Eloquent\Criteria\With;

use App\Services\Payments\Contracts\IWalletOne;

class OrderController extends Controller
{
    protected $orders;
    protected $walletOne;

    public function __construct(OrderRepository $orders, IWalletOne $walletOne)
    {
        $this->orders = $orders;
        $this->walletOne = $walletOne;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relations = ['product'];

        $orders = $this->orders->withCriteria([
            new With($relations)
        ])->getAuthUserOrders()->get();

        return fractal()
            ->collection($orders)
            ->parseIncludes($relations)
            ->transformWith(new OrderTransformer)
            ->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = ['product', 'product.materials', 'product.materials.files'];
        
        $order = $this->orders->withCriteria([
            new With($relations)
        ])->findById($id);

        return fractal()
            ->item($order)
            ->parseIncludes($relations)
            ->transformWith(new OrderTransformer)
            ->toArray();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Get payment signature.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPaymentSignature(Request $request)
    {
        return response()->json([
            'status' => 'OK',
            'data' => [
                'WMI_SIGNATURE' => $this->walletOne->generatePaymentSignature($request->all())
            ]
        ]);
    }
}
