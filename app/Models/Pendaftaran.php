<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $fillable = [
        'user_id',
        'pilihan1',
        'pilihan2',
        'nama_lengkap',
        'tgl_lahir',
        'jk',
        'agama',
        'asal_skh',
        'no_ijz',
        'jalur',
        'nama_ortu',
        'tgl_lahir_ortu',
        'alamat',
        'pekerjaan',
        'no_telp',
        'kk',
        'raport',
        'konfirm',
        'bukti_bayar',
    ];

    public function calon(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
