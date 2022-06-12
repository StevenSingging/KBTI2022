@extends('template.welcome')
<title>Pembayaran</title>
@section('content')
<div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('user')}}">Beranda</a></li>
              <li class="breadcrumb-item active">Pendaftaran</li>
            </ol>
          </div>
        </div>
      </div>
<div class="container">
    <div class="card">
        <div class="card-body">
            @foreach($pem as $pm)
            <p>Selamat <b>{{$pm->nama_lengkap}}</b> , anda telah terdaftar menjadi calon peserta</p><br>
            <p>Silahkan input bukti pembayaran (format .jpg)</p>
            <form action="{{route('simpanbukti',$pm->id)}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <input type="file" name="bukti_bayar" >
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection