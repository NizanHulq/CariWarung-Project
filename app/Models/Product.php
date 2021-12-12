<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';

    public function shop(){
        return $this->belongsTo('App\Models\Shop', 'id_toko', 'id');
    }
}
