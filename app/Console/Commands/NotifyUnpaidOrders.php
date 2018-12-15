<?php

namespace App\Console\Commands;

use Illuminate\Support\Carbon;
use Illuminate\Console\Command;
use App\Notifications\Products\OrderUnpaid;
use App\Repositories\Eloquent\Criteria\Where;
use App\Notifications\Products\FastOrderUnpaid;
use App\Repositories\Contracts\Products\OrderRepository;
use App\Repositories\Eloquent\Criteria\WhereDateBetween;

class NotifyUnpaidOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:orders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Notifies users about unpaid orders';

    protected $orders;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(OrderRepository $orders)
    {
        parent::__construct();

        $this->orders = $orders;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $uniqueOrders = $this->getUniqueOrders();

        foreach ($uniqueOrders as $order) {

            optional($order->user)->notify(new OrderUnpaid());

            if ($order->email) {
                $order->notify(new FastOrderUnpaid());
            }
        }
    }

    protected function getUniqueOrders()
    {
        list($orders, $fastOrders) = $this->orders
            ->withCriteria([
                new Where(
                    'payment_state_id', 
                    config('orders.unpaid_payment_state_id')
                ),
                new WhereDateBetween(
                    'created_at', 
                    Carbon::yesterday(), 
                    Carbon::today()
                )
            ])
            ->get()
            ->partition(function ($order) {
                return !is_null($order->user_id);
            });

        return $orders->unique('user_id')
            ->merge($fastOrders->unique('email'));
    }
}
