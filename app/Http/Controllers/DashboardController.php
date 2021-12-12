<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Shop;
use App\Models\Feedback;
use App\Models\User;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $jumlah_user = User::count();
        $jumlah_produk = Product::count();
        $jumlah_feedback = Feedback::count();
        $jumlah_toko = Shop::count();
        return view('admin.dashboard',compact('jumlah_user','jumlah_feedback','jumlah_toko','jumlah_produk'));
    }
}
