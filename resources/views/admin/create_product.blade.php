@extends('admin.layout.master')

@section('content')

<div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
@if (count($errors) > 0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Produk</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Produk</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none"> {{ Auth::user()->name }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{route('profile')}}">Profile</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            </div>
          </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Tambah Produk</h4>
                </div>
              </div>
            <div class="card-body">
            <form method="post"' action="{{route('adm.product.store')}}" enctype="multipart/form-data" class="text-start">
                @csrf
                <div class="input-group input-group-outline my-3">
                    <label for="nama_produk" class="form-label">Nama Produk</label>
                    <input type="text" class="form-control" name="nama_produk" >
                </div>
                <div class="input-group input-group-outline my-3">
                <!-- <label for="id_toko" class="form-label">Nama Toko</label> -->
                <select name="id_toko" class="form-control">
                    @foreach ($toko as $toko)
                        <option value="{{$toko->id}}">{{$toko->nama_toko}}</option>
                    @endforeach
                </select>
                </div>
                <div class="input-group input-group-outline my-3">
                    <label for="satuan" class="form-label">Satuan</label>
                    <input type="text" class="form-control" name="satuan" placeholder="Per Kg">
                </div>
                <div class="input-group input-group-outline my-3">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="number" class="form-control" name="harga">

                </div>
                <div class="input-group input-group-outline my-3">
                <label class="form-label">Foto</label>
                <br>
                </div>
                <div class="input-group input-group-outline my-3">
                <img class="img-fluid shadow border-radius-xl" id="frame"  height="261" width="261"">
                </div>
                <div class="input-group input-group-outline my-3">
                    <input onchange="loadFile(event)" id="imgInp" accept="image/*" type="file" class="form-control" name="foto">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a class="btn btn-primary" role="button" href="/product-adm">Batal</a>
                </div>
            </form>
            </div>
            </div>
          </div>
        </div>
      </div>


            
          </div>
        </div>
      </div>
</div>
</div>
    <script>
        var loadFile = function(event) {
          var output = document.getElementById('frame');
            frame.src = URL.createObjectURL(event.target.files[0]);
            frame.onload = function() {
            URL.revokeObjectURL(frame.src) // free memory
          }
        };
    </script>
@endsection