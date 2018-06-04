<?php

namespace App\Http\Controllers\Webapi\Payments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Transformers\Users\BusinessEntityTransformer;
use App\Repositories\Contracts\Users\BusinessEntityRepository;

use App\Http\Requests\Webapi\Payments\InvoiceStoreRequest;

use Barryvdh\DomPDF\Facade as PDF;

class InvoiceController extends Controller
{
    protected $businessEntities;

    public function __construct(BusinessEntityRepository $businessEntities)
    {
        $this->businessEntities = $businessEntities;
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
    public function store(InvoiceStoreRequest $request)
    {
        $pdf = PDF::loadView('payments.invoice.pdf', $request->all());
    }
}
