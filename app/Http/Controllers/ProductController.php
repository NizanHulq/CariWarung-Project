<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Shop;
use Image;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $produk= Product::orderBy('id','desc')->paginate(6);

        return view('landing_page.product',compact('produk'));

    }

    public function view_product()
    {
        $data_product = Product::orderBy('id','desc')->paginate(4);
        $no = 4 * ($data_product->currentPage() - 1);


        return view('admin.adm_product',compact('data_product','no'));
    }

    public function create(){
        $produk = Product::all();
        $toko = Shop::all();
        return view('admin.create_product' , compact('produk','toko'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama_produk'     => 'required|string',
            'satuan'     => 'required|string',
            'harga'   => 'required|numeric',
            'foto'     => 'required|image|mimes:jpeg,jpg,png'
        ]);
        $produk = new Product;
        $produk -> nama_produk = $request->nama_produk;
        $produk -> satuan = $request->satuan;
        $produk -> harga = $request->harga;
        $produk -> id_toko = $request->id_toko;
        $produk -> produk_seo = Str::slug($request->nama_produk);


        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(261,261)->save('images/'.$namafile);
        $foto->move('storage/images/',$namafile);

        $produk->foto_produk = $namafile;
        $produk->save();
        return redirect('/product-adm')->with('simpan','Data Produk Berhasil di Simpan');
    }

    public function destroy($id){
        $produk = Product::find($id);
        $produk->delete();
        return redirect('/product-adm')->with('delete','Data Produk Berhasil di Hapus');
    }
    public function edit($id){
        $produk = Product::find($id);
        $toko = Shop::all();
        return view('admin.edit_product', compact('produk','toko'));

    }
    
    public function update($id,Request $request){
        $this->validate($request,[
            'nama_produk'     => 'required|string',
            'satuan'     => 'required|string',
            'harga'   => 'required|numeric',
            'foto'     => 'required|image|mimes:jpeg,jpg,png'
        ]);
        $produk = Product::find($id);
        $produk -> nama_produk = $request->nama_produk;
        $produk -> satuan = $request->satuan;
        $produk -> harga = $request->harga;
        $produk -> id_toko = $request->id_toko;
        $produk -> produk_seo = Str::slug($request->nama_produk);


        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(261,261)->save('images/'.$namafile);
        $foto->move('storage/images/',$namafile);


        $produk->foto_produk = $namafile;
        $produk->update();
        return redirect('/product-adm')->with('update','Data Produk Berhasil di Update');   
    }
}
