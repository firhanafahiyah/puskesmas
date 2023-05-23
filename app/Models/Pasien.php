<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    public static function getAll(){
        return [
            ['nama' => 'udin','jk'=>'l','tgl_lahir'=>'12/06/2002','alamat' =>'Bogor', 'telp' => '083815759600'],
            ['nama' => 'ali','jk'=>'l','tgl_lahir'=>'10/09/2008','alamat' =>'Depok', 'telp' => '083815759600'],
            ['nama' => 'asep','jk'=>'l','tgl_lahir'=>'18/05/2006','alamat' =>'Bekasi', 'telp' => '083815759600'],
        ];
    }
}
