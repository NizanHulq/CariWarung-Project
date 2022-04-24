@extends('admin.layout.master')

@section('content')
<div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
@if (session()->has('simpan'))
    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
        <span class="">{{ session('simpan') }}</span>
        <button type="button" class="btn-close ml-auto d-block" data-bs-dismiss="alert" aria-label="Close" style="border:0; border-radius:4px;background-color:white;">X</button>
    </div>
    @endif
    @if (session()->has('delete'))
    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
        <span class="">{{ session('delete') }}</span>
        <button type="button" class="btn-close ml-auto d-block" data-bs-dismiss="alert" aria-label="Close" style="border:0; border-radius:4px;background-color:white;">X</button>
    </div>
    @endif
    @if (session()->has('update'))
    <div class="alert alert-success alert-dismissible fade show d-flex align-items-center" role="alert">
        <span class="">{{ session('update') }}</span>
        <button type="button" class="btn-close ml-auto d-block" data-bs-dismiss="alert" aria-label="Close" style="border:0; border-radius:4px;background-color:white;">X</button>
    </div>
    @endif
    <!-- Navbar -->
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
<div class="container-fluid py-4">
<div>{{$data_product->links()}}</div>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
          
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 flex">
                <h6 class="text-white text-capitalize ps-3">Tabel Produk</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Produk</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Satuan</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Harga</th>
                      <th class="text-secondary opacity-7"><a href="{{route('adm.product.create')}}" class="text-secondary font-weight-bold text-sm" data-toggle="tooltip" data-original-title="Edit user">
                        <span class="badge badge-sm bg-gradient-info">Tambah Produk</span>
                        </a></th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($data_product as $product)
                    <tr>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{++$no}}</span>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                          <a class="d-block shadow-xl border-radius-xl">
                          <img src="{{ asset('images/'.$product->foto_produk) }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                          </a>
                          </div>
                        </div>
                      </td>
                      <td>
                      <h6 class="mb-0 text-sm">{{$product->nama_produk}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                      <p class="text-xs text-secondary mb-0">{{$product->satuan}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{"Rp ".number_format($product->harga, 2, ',' , '.')}}</span>
                      </td>
                      <td class="align-middle">
                        <a href="{{route('adm.product.edit',$product->id)}}" class="text-secondary font-weight-bold text-sm" data-toggle="tooltip" data-original-title="Edit user">
                        <span class="badge badge-sm bg-gradient-success">Edit</span>
                        </a>
                        <form action="{{route('adm.product.destroy',$product->id)}}" method="post">
                          @csrf
                            <button class="badge badge-sm bg-gradient-danger "><span >Hapus</span></button>
                        </form>
                        <!-- <a href="{{route('adm.product.destroy','$product->id')}}" class="text-secondary font-weight-bold text-sm" data-toggle="tooltip" data-original-title="Edit user">
                        <span class="badge badge-sm bg-gradient-danger">Hapus</span>
                        </a> -->
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection