@extends('template.welcome')
<title>User</title>
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
  <h1>
    <span style="background-color : #024f02; color : #ffffff; mt-10">Selamat Datang, {{Auth()->user()->name}} </span>
  </h1>
  <div class="row">
    <div class="col-lg">
        <div class="card transparent-card ">
        <div class="widget-stat card bg-primary" style="">
          <div class="card-body p-4">
            <div class="media">
              <span class="mr-2">
                <i class="fas fa-users"></i>
              </span>
              <div class="media-body text-white">
              <p class="mb-1">Total Pengguna</p>
                  <h3 class="text-white">{{$counttotal}}</h3>
                  <div class="progress mb-2 bg-secondary">
                  <div class="progress-bar progress-animated bg-light" style="width: {{$counttotal}}%"></div>
                  </div>
                  <small>Saat Ini</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg">
        <div class="card transparent-card">
        <div class="widget-stat card bg-warning" style="">
          <div class="card-body p-4">
            <div class="media">
              <span class="mr-2">
                <i class="fas fa-users"></i>
              </span>
              <div class="media-body text-black">
              <p class="mb-1">Jumlah Pendaftar</p>
                  <h3 class="text-black">{{$jmlpend}}</h3>
                  <div class="progress mb-2 bg-secondary">
                  <div class="progress-bar progress-animated bg-light" style="width: {{$jmlpend}}%"></div>
                  </div>
                  <small>Saat Ini</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="card">
        <div class="card-body table-responsive p-0">
        <table  class="table  table-hover">
                <thead>
                  <tr align="center">
                    <th rowspan="2">Pendaftar</th>
                    <th rowspan="2">Tanggal Daftar</th>
                    <th colspan="2">Pilihan Prodi</th>
                    <th rowspan="2">Jalur</th>
                    <th rowspan="2">Status</th>
                    <th rowspan="2">Bukti Bayar</th>
                  </tr>
                  <tr align="center">
                      <th>Pilihan 1</th>
                      <th>Pilihan 2</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($pdt as $pd)
                @if($pd->user_id == Auth::user()->id)
                <tr align="center">
                <td>{{$pd->nama_lengkap}}</td>
                <td>{{date('d-m-Y', strtotime($pd->created_at))}}</td>
                <td>{{$pd->pilihan1}}</td>
                <td>{{$pd->pilihan2}}</td>
                <td>{{$pd->jalur}}</td>
                <?php if($pd->konfirm == null){ ?>
                        <td><badge class="badge  badge-warning ">Sedang Diproses</badge></td>
                      <?php }elseif($pd->konfirm  == 1){ ?>
                        <td><badge class="badge  badge-success ">Terverifikasi</badge></td>
                      <?php }elseif($pd->konfirm  == 2){ ?>
                        <td><badge class="badge  badge-danger ">Ditolak</badge><br>
                      </td>
                <?php } ?>
                <?php if($pd->konfirm == 1 && $pd->bukti_bayar == null){ ?>
                  <td><a href="{{url('/user/pembayaran',$pd->id)}}"
                      role="button"><i class="fas fa-file"></i></a> </td>
                <?php }elseif($pd->konfirm == null && $pd->bukti_bayar == null){?>
                    <td><badge class="badge  badge-warning ">Sedang Diproses</badge></td>
                <?php }elseif($pd->konfirm == 2 && $pd->bukti_bayar == null){?>
                  <td><badge class="badge  badge-danger ">DItolak</badge></td>
                <?php }elseif($pd->konfirm == 1 && $pd->bukti_bayar != null){?>
                  <td><a href="{{ asset('img/'. $pd->bukti_bayar ) }}" target="_blank" rel="noopener noreferrer">Lihat File</a> </td>
                <?php }?>
                </tr>
                @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>

@endsection