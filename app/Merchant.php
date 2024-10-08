<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    // Indicate the table associated with the model
    protected $table = 'merchants';

    // The attributes that are mass assignable
    protected $fillable = ['company_name', 'address', 'contact', 'description'];

    // Define the relationship with the Order model
    public function orders()
    {
        return $this->hasMany(Order::class, 'merchant_id');
    }
}
