<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{   // method untuk menampilkan data semua dokter
    public function index(){
        
        $dokter = Dokter::all();
       
        return view('admin.dokter.index', [
            'dokters' => $dokter
        ]);
    }

    public function create(){
         return view('admin.dokter.create');
}


    public function store(Request $request)
{
      //insert data ke table DOKTER
      Dokter::create([
        // field di table => nilai yang ingin diisi
        'nama' => $request->nama,
        'spesialis' => $request->spesialis,
        'alamat'=> $request->alamat,
        'telp' => $request->telp
      ]);

      return redirect('/dokter');
   }

}
