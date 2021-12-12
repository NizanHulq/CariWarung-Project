<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Product;
use Image;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    // landing page
    public function index()
    {
        $toko = Shop::orderBy('id','desc')->paginate(6);
        $produk = Product::all();

        return view('landing_page.shop',compact('toko','produk'));
    }

    public function detail($title)
    {
        $toko = Shop::where('toko_seo', $title)->first();
        $products = $toko->photos()->orderBy('id', 'desc')->paginate(6);
        return view('landing_page.detail-shop', compact('toko', 'products'));
    }

    // admin 
    public function view_shop()
    {
        $toko = Shop::orderBy('id','desc')->paginate(4);
        $no = 4 * ($toko->currentPage() - 1);


        return view('admin.adm_shop',compact('toko','no'));
    }

    public function create(){
        $toko = Shop::all();
        return view('admin.create_shop' , compact('toko'));
    }

    public function store(Request $request){
        $this->validate($request,[
            'nama_toko'     => 'required|string',
            'nama_jalan'     => 'required|string',
            'kelurahan'     => 'required|string',
            'kecamatan'     => 'required|string',
            'kabupaten'     => 'required|string',
            'provinsi'     => 'required|string',
            'jenis_toko'     => 'required|string',
            'no_rumah'   => 'required|numeric',
            'kode_pos'   => 'required|numeric',
            'foto'     => 'required|image|mimes:jpeg,jpg,png'
        ]);
        $toko = new Shop;
        $toko -> nama_toko = $request->nama_toko;
        $toko -> nama_jalan = $request->nama_jalan;
        $toko -> kelurahan = $request->kelurahan;
        $toko -> kecamatan = $request->kecamatan;
        $toko -> kabupaten = $request->kabupaten;
        $toko -> provinsi = $request->provinsi;
        $toko -> jenis_toko = $request->jenis_toko;
        $toko -> deskripsi_toko = $request->deskripsi_toko;
        $toko -> no_rumah = $request->no_rumah;
        $toko -> kode_pos = $request->kode_pos;
        $toko -> toko_seo = Str::slug($request->nama_toko);


        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(350,200)->save('images/'.$namafile);
        $foto->move('storage/images/',$namafile);


        $toko->foto_toko = $namafile;
        $toko->save();
        return redirect('/shop-adm')->with('simpan','Data Toko Berhasil di Simpan');
    }

    public function destroy($id){
        $toko= Shop::find($id);
        $toko->delete();
        return redirect('/shop-adm')->with('delete','Data Toko Berhasil di Hapus');
    }

    public function edit($id){
        $toko = Shop::find($id);
        return view('admin.edit_shop', compact('toko'));

    }

    public function update($id,Request $request){
        $this->validate($request,[
            'nama_toko'     => 'required|string',
            'nama_jalan'     => 'required|string',
            'kelurahan'     => 'required|string',
            'kecamatan'     => 'required|string',
            'kabupaten'     => 'required|string',
            'provinsi'     => 'required|string',
            'jenis_toko'     => 'required|string',
            'no_rumah'   => 'required|numeric',
            'kode_pos'   => 'required|numeric',
            'foto'     => 'required|image|mimes:jpeg,jpg,png'
        ]);
        $toko = Shop::find($id);
        $toko -> nama_toko = $request->nama_toko;
        $toko -> nama_jalan = $request->nama_jalan;
        $toko -> kelurahan = $request->kelurahan;
        $toko -> kecamatan = $request->kecamatan;
        $toko -> kabupaten = $request->kabupaten;
        $toko -> provinsi = $request->provinsi;
        $toko -> jenis_toko = $request->jenis_toko;
        $toko -> deskripsi_toko = $request->deskripsi_toko;
        $toko -> no_rumah = $request->no_rumah;
        $toko -> kode_pos = $request->kode_pos;
        $toko -> toko_seo = Str::slug($request->nama_toko);


        $foto = $request->foto;
        $namafile = time().'.'.$foto->getClientOriginalExtension();

        Image::make($foto)->resize(350,200)->save('images/'.$namafile);
        $foto->move('storage/images/',$namafile);


        $toko->foto_toko = $namafile;
        $toko->update();
        return redirect('/shop-adm')->with('update','Data Toko Berhasil di Update');
    }

    public function like(Request $request, $id){
        $toko = Shop::find($id);
        $toko->increment('suka');
        Return back();
    }


}
