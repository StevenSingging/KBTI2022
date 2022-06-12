<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pendaftaran;
use DB;
class AdminController extends Controller
{
    public function index(){
        $pend = new Pendaftaran;
        $countuser = Pendaftaran::count();
        $counttotal = User::count();
        $user = User::all();
        $countacc = Pendaftaran::where('konfirm','1')->count();
        $countdec = Pendaftaran::where('konfirm','2')->count();
        $timeline = Pendaftaran::select('created_at','updated_at')->get();
        return view('admin.dashboard',compact('countuser','counttotal','countacc','countdec','timeline','user'));
    }

    public function konfirmasi(){
        $dp = Pendaftaran::all();
        return view('admin.konfirmasipend',compact('dp'));
    }

    public function verifikasi(Request $request,$id){
        $data = $request->all();
        Pendaftaran::where(['id'=>$id])->update(['konfirm'=>1]);
        return redirect()->back()->with('toast_success','Konfirmasi Berhasil');
    }

    public function tolak(Request $request,$id){
        $data = $request->all();
        Pendaftaran::where(['id'=>$id])->update(['konfirm'=>2]);
        return redirect()->back()->with('toast_success','Ditolak Berhasil');
    }
}
