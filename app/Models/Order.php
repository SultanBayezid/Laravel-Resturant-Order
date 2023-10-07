<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'total_price', 'delivery_address', 'contact_number', 'status'];

    public function menus()
    {
        return $this->belongsToMany(Menu::class, 'order_menu')->withPivot('quantity');
    }
}
