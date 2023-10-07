<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
        
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_menu')->withPivot('quantity');
    }
}
