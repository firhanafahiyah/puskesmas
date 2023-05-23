<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    public static function getAll(){
        return [
            ['nama' => 'sutarno','sp'=>'sunat','alamat' =>'Bogor', 'telp' => '083815759600'],
            ['nama' => 'abdul','sp'=>'bedah','alamat' =>'Depok', 'telp' => '083815759600'],
            ['nama' => 'robi','sp'=>'kanker','alamat' =>'Bekasi', 'telp' => '083815759600'],
        ];
    }
}
