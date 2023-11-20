<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_Items extends Model
{
    use HasFactory;
    protected $fillable = ['cart_id', 'item_id'];
    public function carts()
    {
        return $this->belongsToMany(Carts::class);
    }
    public function items()
    {
        return $this->belongsTo(Items::class);
    }
}
