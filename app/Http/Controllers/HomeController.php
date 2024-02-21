<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index(Request $request){
        // dd(Auth::user());
        $user = $request->session()->get('user');
        return view('/coba',  [
            'user' => $user,
        ]);
    }
}
