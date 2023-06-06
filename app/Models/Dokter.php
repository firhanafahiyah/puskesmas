<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

   //menghubungkan model ke table dokter
   protected $table = 'dokter';

   // menyebutkan field yang boleh diisi,
   protected $fillable = ['nama' , 'spesialis' , 'alamat' , 'telp'];
}    