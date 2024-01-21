<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TransaksiMobil;
use App\Models\UserRole;
class TransaksiMobilController extends Controller
{
    public function rental($id){
        // dd($id);
        $rental = new TransaksiMobil();
        $rental ->user_id=auth()->user()->id;
        $rental ->mobil_id=$id;
        $rental->save();

        return redirect()->back()->with('success','Mobil Berhasil Masuk dalam list Rental Mobil!');
    }
    public function index(){
       

        $roleUser=$this->roleUser()->role->nama_role;
        if($roleUser=='Admin'){
            $transaksi = TransaksiMobil::latest()->get(); // Perubahan di sini
        }elseif($roleUser=='User'){
            $transaksi = TransaksiMobil::where('user_id', auth()->user()->id)->latest()->get(); // Perubahan di sini
        }
        
        return view('transaksi.index', compact('transaksi')); // Perubahan di sini
    }
    public function roleUser(){
        $user_role=UserRole::where('user_id', auth()->user()->id)->first();
        return $user_role;
    }
}