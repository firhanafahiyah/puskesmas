<?php

namespace App\Http\Controllers;

use App\Models\Dokter as ModelsDokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index(){
        
        $dokter = ModelsDokter::getAll();
       
        return view('admin.dokterindex', [
            'dokter' => $dokter
        ]);
    }

    public function create(){
         return view('admin.doktercreate');
}


    public function store(Request $request){
    dd($request->all());
}
}
