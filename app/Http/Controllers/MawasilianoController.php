<?php

namespace App\Http\Controllers;

use App\Models\Kazi;
use Illuminate\Http\Request;

class MawasilianoController extends Controller{

    public function edit($id){
        $kibarua = Kazi::find($id);
        return view('mawasiliano')->with('kibarua', $kibarua);
    }
}
