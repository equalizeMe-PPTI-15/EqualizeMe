<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\News;
// use App\Models\Education;
use App\Models\User;


class HomeController extends Controller
{
    public function index(Request $request){
        // dd(Auth::user());
        $user = $request->session()->get('user');
        return view('/home',  [
            'user' => $user,
            "title" => "news",
            "news" => News::latest()->get(),
            "edu_title" => "education",
            "education" => Education::latest()->get()
        ]);
    }
}
