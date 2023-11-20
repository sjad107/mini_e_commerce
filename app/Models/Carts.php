<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id'];
    public function items()
    {
        return $this->hasMany(Cart_Items::class);
    }
    public function customers()
    {
        return $this->belongsTo(Customers::class);
    }
}
