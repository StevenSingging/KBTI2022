@extends('template.welcome')
<title>Admin</title>
@section('content')
<div id="mycarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target ="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target ="#mycarousel" data-slide-to="1"></li>
    <li data-target ="#mycarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" data-interval="1500">
    <div class="overlay-image" style="background-image:url({{ asset('Admin/dist/img/PMBUKDW2.jpg') }});"></div>
    </div>
    <div class="carousel-item" data-interval="1000" >
    <div class="overlay-image" style="background-image:url({{ asset('Admin/dist/img/PMBUKDW.jpg') }});"></div>
    </div>
    <div class="carousel-item" data-interval="500">
    <div class="overlay-image" style="background-image:url({{ asset('Admin/dist/img/PMBUKDW3.jpg') }});"></div>
    </div>
  </div>
  <a href="#mycarousel" class="carousel-control-prev" role="button" data-slide="prev">
    <span class="sr-only">Previous</span>
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </a>
  <a href="#mycarousel" class="carousel-control-next" role="button" data-slide="next">
    <span class="sr-only">Next</span>
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
</div>          

<div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card tryal-gradient">
                                        <div class="card-body tryal row">
                                            <div class="col-xl-7 col-sm-6">
                                                <h1>Selamat Datang, {{Auth()->user()->name}}</h1>
                                                <span>Terus pantau kegiatan penerimaan mahasiswa baru </span>
                                                    <a href="{{route('konfirmasi')}}" class="btn btn-primary">Lihat pendaftar</a>
                                            </div>
                                            <div class="col-xl-5 col-sm-6">
                                                <img src="{{ asset('Admin/dist/img/chart.png') }}"" alt=""
                                                    class="sd-shape">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="row">
                                        <div class="col-xl-6 col-sm-6">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Pendaftar</span>
                                                <span class="info-box-number">
                                                {{$countuser}}
                                                </span>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-check"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Pendaftaran Diterima</span>
                                                    <span class="info-box-number">
                                                    {{$countacc}}
                                                    </span>
                                                </div>
                                            </div>                                  
                                        </div>
                                        <div class="col-xl-6 col-sm-6">
                                        <div class="info-box">
                                            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-chart-line"></i></span>
                                            <div class="info-box-content">
                                                <span class="info-box-text">Total Pengguna</span>
                                                <span class="info-box-number">
                                                {{$counttotal}}
                                                </span>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-xl-6 col-sm-6">
                                            <div class="info-box">
                                                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-user-times"></i></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">Pendaftaran Ditolak</span>
                                                    <span class="info-box-number">
                                                    {{$countdec}}
                                                    </span>
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
</div>
@endsection