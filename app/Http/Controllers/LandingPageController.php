<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Shop;

class LandingPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $produk = Product::limit(3)->get();
        $toko = Shop::limit(3)->get();
        return view('landing_page.home',compact('produk','toko'));
    }

    public function search(Request $request)
    {
        $cari = $request->kata;
        $produk = Product::where('nama_produk','like',"%".$cari."%")->get();
        $toko = Shop::where('nama_toko','like',"%".$cari."%")->get();
        // $jumlah_produk = Product::count();
        // $jumlah_toko = Shop::count();

        return view('landing_page.search',compact('produk','toko','cari'));
    }
}
