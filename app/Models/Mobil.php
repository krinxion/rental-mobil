<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;
    protected $fillable = [
        'merk_id',
        'nama_mobil',
        'merk_mobil_id',
        'warna_mobil',
        'foto',
    ];

    public function merk(){
        return $this->belongsTo(MerkMobil::class);
    }
}
