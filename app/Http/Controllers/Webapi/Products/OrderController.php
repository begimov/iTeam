<?php

namespace App\Http\Controllers\Webapi\Products;

use Illuminate\Http\Request;
use App\Models\Products\Order;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;

use App\Repositories\Eloquent\Criteria\With;
use App\Transformers\Products\OrderTransformer;

use App\Http\Requests\Webapi\Products\OrderStoreRequest;
use App\Repositories\Contracts\Products\OrderRepository;

class OrderController extends Controller
{
    protected $orders;

    public function __construct(OrderRepository $orders)
    {
        $this->middleware('auth')->except(['store']);

        $this->orders = $orders;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relations = ['product'];

        $orders = $this->orders
            ->withCriteria([
                new With($relations)
            ])
            ->getAuthUserOrders()
            ->latest()
            ->get();

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
    public function store(OrderStoreRequest $request)
    {
        if (!Auth::check()) {
            session([
                config('session.keys.ordered_product') 
                    => $request->all()
            ]);
            return redirect()->route('register');
        }
        $order = $this->orders->store($request->all());

        if ($order->price < config('orders.max_cheap_order_price')) {
            return redirect()->route('orders.wo.redirect', ['order' => $order->id]);
        }

        return redirect()->route('user.dashboard.index', ['order' => $order->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = ['product', 'product.tests', 'product.materials', 'product.materials.files', 'product.materials.resources'];
        
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
    public function destroy(Order $order)
    {
        $this->authorize('delete', $order);

        if (!$order->isPaid()) {
            $this->orders->destroy($order);
        }
    }
}
