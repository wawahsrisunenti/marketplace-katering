<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // Indicate the table associated with the model
    protected $table = 'customers';

    // The attributes that are mass assignable
    protected $fillable = ['name', 'email'];

    // Define the relationship with the Order model
    public function orders()
    {
        return $this->hasMany(Order::class, 'customer_id');
    }
}
