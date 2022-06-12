@extends('template.welcome')
<title>Konfirmasi Pendaftaran</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('admin')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Konfirmasi Pendaftaran</li>
            </ol>
          </div>
        </div>
      </div>
<div class="container">
    <div class="card">
        <div class="card-body">
        <table id="example2" class="table table-hover">
                <thead>
                  <tr align="center">
                    <th rowspan="2" class="align-middle">No</th>
                    <th rowspan="2" class="align-middle">Nama Pendaftar</th>
                    <th rowspan="2" class="align-middle">Jenis Kelamin</th>
                    <th rowspan="2" class="align-middle">Tanggal Daftar</th>
                    <th colspan="2" class="align-middle">Pilihan Prodi</th>
                    <th rowspan="2" class="align-middle">Status</th>
                  </tr>
                  <tr align="center">
                      <th>Pilihan 1</th>
                      <th>Pilihan 2</th>
                  </tr>
                </thead>
                <tbody>
                @php $no=1; @endphp
                @foreach($dp as $p)
                <tr align="center">
                <td>{{ $no++ }}</td>
                <td>{{$p->nama_lengkap}}</td>
                <td>{{$p->jk}}</td>
                <td>{{date('d-m-Y', strtotime($p->created_at))}}</td>
                <td>{{$p->pilihan1}}</td>
                <td>{{$p->pilihan2}}</td>
                <?php if($p->konfirm == null){ ?>
                <td><a href="{{url('/adminregis/verifikasi',$p->id)}}"  onclick="return confirm('Apakah Anda yakin data akan diverifikasi ?')" 
                      role="button"><i class="fas fa-check"></i></a> |
                <a href="{{url('/adminregis/tolak',$p->id)}}"onclick="return confirm('Apakah Anda yakin data akan ditolak ?')"
                        role="button"><i class="fas fa-times" style="color : red"></i></a></td>
                <?php }elseif($p->konfirm == 1){ ?>
                  <td><badge class="badge  badge-success ">Verifikasi</badge></td>
                <?php }elseif($p->konfirm == 2){ ?>
                  <td><badge class="badge  badge-danger ">Ditolak</badge></td>
                <?php }?>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection