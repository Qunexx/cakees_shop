<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cartitems()
    {
        return $this->hasMany(CartItem::class);
    }

    public function hasItems()
    {
        return $this->cartitems()->exists();
    }
}
