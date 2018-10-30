<?php

namespace App\Http\Controllers\Products;

use App\Models\Content\File;
use Illuminate\Http\Request;
use App\Http\Traits\Downloads;
use App\Models\Products\Order;
use App\Http\Controllers\Controller;
use App\Http\Requests\Webapi\Products\OrderStoreRequest;
use App\Repositories\Contracts\Products\OrderRepository;

class FastOrderController extends Controller
{
    use Downloads;
    
    protected $orders;

    public function __construct(OrderRepository $orders)
    {
        $this->orders = $orders;
    }

    public function show(Order $order, $code)
    {
        if ($order->isPaid()) {
            
            $order->load('product', 'product.materials', 'product.materials.files', 'product.materials.resources');
            
        }

        return view('products.fastorder.show', compact('order'));
    }

    public function download(Order $order, $code, File $file)
    {
        if (!$this->isDownloadable($order, $file)) return abort(404);

        return $this->downloadMaterialFile($file);
    }

    protected function isDownloadable($order, $file)
    {
        $result = $order->product->materials
            ->filter(function($material) use ($file) {

            return !$material->files
                ->whereIn('id', [$file->id])
                ->isEmpty();

        });

        return !$result->isEmpty();
    }
}
