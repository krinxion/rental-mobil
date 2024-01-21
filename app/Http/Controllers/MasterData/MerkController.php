<?php

namespace App\Http\Controllers\MasterData;

use App\Http\Controllers\Controller;
use App\Models\MerkMobil;
use Illuminate\Http\Request;

class MerkController extends Controller
{
    public function index(){
        $merk = MerkMobil::orderBy('merk', 'asc')->get();
        return view('master-data.merk-mobil.index',[
            'merk' =>$merk
        ]);

    }
    public function store(request $request){
        $merk = new MerkMobil();
        $merk->merk=$request->input('merk-mobil');
        $merk->save();
        return redirect()->back()->with('success' ,'Data Berhasil Ditambahkan!');
    }

    public function update(request $request, $id){
        $merk = MerkMobil::Find($id);
        $merk->merk=$request->input('merk-mobil');
        $merk->save();
        return redirect()->back()->with('success' ,'Data Berhasil Diupdate!');
    }

    public function delete($id){
        $merk = MerkMobil::Find($id);
        $merk->delete();
        
        return redirect()->back()->with('success' ,'Data Berhasil Dihapus!');
    }
}
