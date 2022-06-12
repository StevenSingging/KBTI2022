@extends('template.welcome')
<title>Pendaftaran</title>
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
        <div class="card-header">
            <h5>Data Calon Mahasiswa</h5>
        </div>
        <div class="card-body">
        <form action="{{route('simpanpendaftaran')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Pilihan 1</label>
                <div class="col-sm-10">
                <select class="custom-select form-control-border" name="pilihan1">
                    <option selected="selected">Pilih Prodi</option>
                        <option>Arsitektur </option>
                        <option>Desain Produk </option>
                        <option>Manajemen </option>
                        <option>Akuntansi </option>  
                        <option>Biologi </option>  
                        <option>Informatika </option>  
                        <option>Sistem Informasi </option>  
                        <option>Pendidikan Bahasa Inggris </option>       
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Pilihan 2</label>
                <div class="col-sm-10">
                <select class="custom-select form-control-border" name="pilihan2">
                    <option selected="selected">Pilih Prodi</option>
                        <option>Arsitektur </option>
                        <option>Desain Produk </option>
                        <option>Manajemen </option>
                        <option>Akuntansi </option>  
                        <option>Biologi </option>  
                        <option>Informatika </option>  
                        <option>Sistem Informasi </option>  
                        <option>Pendidikan Bahasa Inggris </option>          
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Nama Lengkap</label>
                <div class="col-sm-10">
                <input type ="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Tanggal Lahir</label>
                <div class="col-sm-10">
                <input type ="date" class="form-control" name="tgl_lahir">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Jenis Kelamin</label>
                <div class="col-sm-10">
                <select class="custom-select form-control-border" name="jk">
                    <option selected="selected">Pilih Jenis Kelamin</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Agama</label>
                <div class="col-sm-10">
                <select class="custom-select form-control-border" name="agama">
                    <option selected="selected">Pilih Agama</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Khatolik</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Konghucu</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Asal Sekolah</label>
                <div class="col-sm-10">
                <input type ="text" class="form-control" name="asal_skh" placeholder="Asal Sekolah">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Nomor Ijazah</label>
                <div class="col-sm-10">
                <input type ="text" class="form-control" name="no_ijz" placeholder="Nomor Ijazah">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Jalur Test</label>
                <div class="col-sm-10">
                <select class="custom-select form-control-border" name="jalur">
                    <option selected="selected">Pilih Jalur Test</option>
                        <option>Regular</option>
                        <option>Prestasi</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Scan Kartu Keluarga (pdf)</label>
                <div class="col-sm-10">
                <input type ="file" class="form-control" name="kk">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Input file Raport (pdf)</label>
                <div class="col-sm-10">
                <input type ="file" class="form-control" name="raport">
                </div>
            </div>
            <h5 class="mb-4 mt-5">Data Orang Tua Calon Mahasiswa</h5>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Nama Orang tua</label>
                <div class="col-sm-10">
                <input type ="text" class="form-control" placeholder="Nama Orang tua" name="nama_ortu">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Tanggal Lahir</label>
                <div class="col-sm-10">
                <input type ="date" class="form-control" name="tgl_lahir_ortu">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Alamat</label>
                <div class="col-sm-10">
                <input type ="text" class="form-control" placeholder="Alamat" name="alamat">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">Pekerjaan</label>
                <div class="col-sm-10">
                <input type ="text" class="form-control" placeholder="Pekerjaan" name="pekerjaan">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-table">No Telepon</label>
                <div class="col-sm-10">
                <input type ="number" class="form-control" placeholder="No Telepon"  name="no_telp">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info">Daftar</button>
                <a class="btn btn-danger float-right" href="{{route('user')}}"
                onclick="return confirm('Apakah Anda yakin akan Batal ?')"
                role="button">Batal</a>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection