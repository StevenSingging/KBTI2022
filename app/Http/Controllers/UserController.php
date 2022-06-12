<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pendaftaran;
use Auth;
use DB;
class UserController extends Controller
{
    public function index(){
        $counttotal = User::count();
        $jmlpend = User::where('role','User')->count();
        $pdt = Pendaftaran::where('user_id', Auth::user()->id)->get();
        $bk = Pendaftaran::whereNull('konfirm')->where('konfirm',2)->first();
        
        return view('user.dashboard',compact('pdt','bk','counttotal','jmlpend'));
    }

    public function pendaftaran(){
        return view('user.pendaftaran');
    }

    public function simpanpendaftaran(Request $request){
        //dd($request->all());
        $pendaftaran= Pendaftaran::where('user_id', Auth::user()->id)->wherenotNull('konfirm')->first();
        $nm = $request->file('kk');
        $namafile = $nm->getClientOriginalName();
        $nm->move(public_path().'/pdf',$namafile);
        $nms = $request->file('raport');
        $namafiles = $nms->getClientOriginalName();
        $nms->move(public_path().'/pdf',$namafiles);
        $pdt = new Pendaftaran;
        if(empty($pendaftaran)){
            Pendaftaran::create([
                'user_id'=> $request -> user() -> id ,
                'pilihan1'=> $request -> pilihan1,
                'pilihan2'=> $request -> pilihan2,
                'nama_lengkap'=> $request -> nama_lengkap,
                'tgl_lahir'=> $request -> tgl_lahir,
                'jk'=> $request -> jk,
                'agama'=> $request -> agama,
                'asal_skh'=> $request -> asal_skh,
                'no_ijz'=> $request -> no_ijz,
                'jalur'=> $request -> jalur,
                'nama_ortu'=> $request -> nama_ortu,
                'tgl_lahir_ortu'=> $request -> tgl_lahir_ortu,
                'alamat'=> $request -> alamat,
                'pekerjaan'=> $request -> pekerjaan,
                'no_telp'=> $request -> no_telp,
                'kk'=> $namafile,
                'raport'=> $namafiles,
            ]);
        }
        return redirect('user/pendaftaran');
        
    }

    public function viewpembayaran($id){
        $pem = Pendaftaran::where(['id'=>$id])->wherenotNull('konfirm')->get();
        return view('user.pembayaran',compact('pem'));
        
    }

    public function simpanbukti(Request $request,$id){
        //dd($request->all());
        $nmf = $request->bukti_bayar;
        $namafile = $nmf->getClientOriginalName();

        Pendaftaran::where(['id'=>$id])->update(['bukti_bayar'=>$namafile]);
        $nmf->move(public_path().'/img',$namafile);
        return redirect()->back();

    }
}
