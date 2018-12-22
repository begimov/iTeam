<?php

namespace App\Mail\Products;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use App\Models\Products\Order;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FastOrderUnpaid extends Mailable
{
    use Queueable, SerializesModels;

    protected $order;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.products.fastorderunpayed')
            ->with([
                'orderUrl' => route('fastorders.show', [
                    'order' => $this->order->id,
                    'code' => $this->order->getFastOrderToken(),
                ]),
                'product' => $this->order->product->name
            ])
            ->subject('Напоминание о заказе');
    }
}
