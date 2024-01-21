<?php

namespace App\Http\Controllers;
use App\Models\Mobil;
use Illuminate\Http\Request;

class RentalMobilController extends Controller
{
    public function index(){
        $rental=Mobil::orderBy('nama_mobil', 'asc')->get();
        return view('rental-mobil.index',[
            'rentals' => $rental
        ]);
    }
}
