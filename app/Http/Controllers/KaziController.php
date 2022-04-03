<?php

namespace App\Http\Controllers;
use App\Models\Kazi;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaziController extends Controller{

    public function index(){

        return view('ajiri');
    }

    public function store(Request $request){

        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'email'=>'required|string',
            'phone'=>'required|digits:10',
            'eneo'=>'required',
            'kazi' => 'required',
            'maelezo' =>'required|string'

        ]);

        $kibarua = new Kazi;
        $kibarua->Mwajiri = $request->input('name');
        $kibarua->email = $request->input('email');
        $kibarua->kazi = $request->input('kazi');
        $kibarua->simu = $request->input('phone');
        $kibarua->eneo = $request->input('eneo');
        $kibarua->maelezo = $request->input('maelezo');
        $kibarua -> save();

/*        Kazi::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'phone' => $validate['phone'],
            'eneo' => $validate['eneo'],
            'kazi' => $validate['kazi'],
            'maelezo' => $validate['maelezo'],
        ]);*/


        return redirect('kazi');
    }


    public function kazi(){
        $kazi = DB::table('works')
            ->latest()->paginate(10);
        return view('kazi',['kazi'=>$kazi]);

    }

    public function search(){
        if(isset($_GET['query'])){
            $searched_text = $_GET['query'];
            $vibarua = DB::table('works')->where('kazi','LIKE','%'.$searched_text.'%')->paginate(10);
            return view('searchedResult',['vibarua'=>$vibarua]);

        }else{
            return view('searchedResult');
        }

    }
}
