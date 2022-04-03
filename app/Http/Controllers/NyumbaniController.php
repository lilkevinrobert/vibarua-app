<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NyumbaniController extends Controller{
    public function home(){

        $kazi = DB::table('works')
            ->latest()->paginate(12);
        return view('home',['kazi'=>$kazi]);

    }

    public function logout(Request $request){

        Auth::logout();
        $request ->session()->invalidate();
        $request ->session()->regenerateToken();
        return redirect('/');
    }
}
