<?php

namespace App\Models\Products;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'product_id', 'price', 'quantity', 'payment_state_id', 'email'];
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function markAsPayed()
    {
        $this->payment_state_id = config('orders.payed_payment_state_id');
        $this->save();
    }

    public function isPaid()
    {
        return $this->payment_state_id === config('orders.payed_payment_state_id');
    }
}