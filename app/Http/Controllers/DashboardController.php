<?php

namespace App\Http\Controllers;
use App\Models\Mobil;
use App\Models\MerkMobil;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $countMerk=MerkMobil::count();
        $countMobil=Mobil::count();
        $countUsers=User::count();

        $merk=MerkMobil::all();
        $dataMerk=[];
        $jmlhMobil=[];
        for($i=0;$i<count($merk);$i++){
            $mobil=Mobil::where('merk_id',$merk[$i]->id)->count();
            array_push($dataMerk,$merk[$i]->merk);
            array_push($jmlhMobil,$mobil);
        }

        $data_merk=json_encode($dataMerk);
        $jmlh_mobil=json_encode($jmlhMobil);

        return view('dashboard',[
            'data_merk'=>$data_merk,
            'jmlh_mobil'=>$jmlh_mobil,
            'countMerk'=>$countMerk,
            'countMobil'=>$countMobil,
            'countUsers'=>$countUsers
        
        ]);
    }
}
