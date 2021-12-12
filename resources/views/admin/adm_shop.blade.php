@extends('admin.layout.master')

@section('content')
<div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Toko</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Toko</h6>
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
<div>{{$toko->links()}}</div>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
          
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 flex">
                <h6 class="text-white text-capitalize ps-3">Tabel Toko</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Toko</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Toko</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deskripsi Toko</th>
                      <th class="text-secondary opacity-7"><a href="{{route('adm.shop.create')}}" class="text-secondary font-weight-bold text-sm" data-toggle="tooltip" data-original-title="Edit user">
                        <span class="badge badge-sm bg-gradient-info">Tambah Toko</span>
                        </a></th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($toko as $toko)
                    <tr>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{++$no}}</span>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                          <a class="d-block shadow-xl border-radius-xl">
                          <img src="{{ asset('images/'.$toko->foto_toko) }}" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                          </a>
                          </div>
                        </div>
                      </td>
                      <td>
                      <h6 class="mb-0 text-sm">{{$toko->nama_toko}}</h6>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">Jalan</p>
                        <p class="text-xs text-secondary mb-0">{{$toko->nama_jalan}} , No . {{$toko->no_rumah}}</p>
                        <p class="text-xs font-weight-bold mb-0">Kelurahan</p>
                        <p class="text-xs text-secondary mb-0">{{$toko->kelurahan}}</p>
                        <p class="text-xs font-weight-bold mb-0">Kecamatan</p>
                        <p class="text-xs text-secondary mb-0">{{$toko->kecamatan}}</p>
                        <p class="text-xs font-weight-bold mb-0">Kabupaten</p>
                        <p class="text-xs text-secondary mb-0">{{$toko->kabupaten}}</p>
                        <p class="text-xs font-weight-bold mb-0">Provinsi</p>
                        <p class="text-xs text-secondary mb-0">{{$toko->provinsi}}</p>
                        <p class="text-xs font-weight-bold mb-0">Kode Pos</p>
                        <p class="text-xs text-secondary mb-0">{{$toko->kode_pos}}</p>
                      </td>
                      <td>
                      <p class="text-xs font-weight-bold mb-0">{{$toko->jenis_toko}}</p>
                      </td>
                      <td >
                      <p class="text-xs text-secondary mb-0">{{$toko->deskripsi_toko}}</p>
                      </td>
                      <td class="align-middle">
                        <a href="{{route('adm.shop.edit',$toko->id)}}" class="text-secondary font-weight-bold text-sm" data-toggle="tooltip" data-original-title="Edit user">
                        <span class="badge badge-sm bg-gradient-success">Edit</span>
                        </a>
                        <a href="{{route('adm.shop.destroy','$toko->id')}}" class="text-secondary font-weight-bold text-sm" data-toggle="tooltip" data-original-title="Edit user">
                        <span class="badge badge-sm bg-gradient-danger">Hapus</span>
                        </a>
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