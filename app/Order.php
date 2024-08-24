<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Indicate the table associated with the model
    protected $table = 'orders';

    // The attributes that are mass assignable
    protected $fillable = ['customer_id', 'merchant_id', 'delivery_date', 'total_price'];

    // Define the relationship with the Customer model
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    // Define the relationship with the Merchant model
    public function merchant()
    {
        return $this->belongsTo(Merchant::class, 'merchant_id');
    }
}
