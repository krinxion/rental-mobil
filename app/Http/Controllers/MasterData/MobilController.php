<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use App\Models\MerkMobil;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    public function index(){
        $mobil=Mobil::orderBy('nama_mobil','asc')->get();
        $merk= MerkMobil::all();
        return view('master-data.mobil.index',[
            'mobil' => $mobil,
            'merks' => $merk
            
        ]);
    }
    public function store(request $request){
        $request->validate([
            'nama_mobil'=> 'required',
            'warna_mobil'=>'required',
            'foto'=>'required|mimes:png,jpg',
            'merk_id'=>'required'
        ]);
        $mobil=new Mobil();
        $mobil->nama_mobil=$request->input('nama_mobil');
        $mobil->warna_mobil=$request->warna_mobil;

        $mobil->foto=$request->file('foto')->store('foto', 'public');

        $mobil->merk_id=$request->merk_id;
        $mobil->save();

        return redirect()->back()->with('success','Mobil Berhasil Ditambahkan!...');
    }

    public function update(request $request, $id){
        $request->validate([
            'nama_mobil'=> 'required',
            'warna_mobil'=>'required',
            'foto'=>'required|mimes:png,jpg',
            'merk_id'=>'required'
        ]);
        $mobil=Mobil::find($id);
        $mobil->nama_mobil=$request->input('nama_mobil');
        $mobil->warna_mobil=$request->warna_mobil;

        $fileL=public_path('/storage/'). $mobil->foto;
        if (file_exists($fileL)){
            @unlink($fileL);
        }
        $mobil->foto=$request->file('foto')->store('foto', 'public');

        $mobil->merk_id=$request->merk_id;
        $mobil->save();

        return redirect()->back()->with('success','Mobil Berhasil DiUpdate!...');
    }

    public function delete($id){
        
        $mobil=Mobil::find($id);
        $mobil->delete();

        return redirect()->back()->with('success','Mobil Berhasil DiHapus!...');
    }

}
