<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Shop extends Model
{
    use HasFactory;
    protected $table = 'shop';

    public function photos(){
        return $this->hasMany('App\Models\Product', 'id_toko', 'id');
    }
}
