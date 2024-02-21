<?php

namespace App\Http\Controllers;
use App\Models\Education;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsEduController extends Controller
{
    public function index(){
        // dd(Auth::user());
        return view('/home', [
            "title" => "news",
            "news" => News::latest()->get(),
            "edu_title" => "education",
            "education" => Education::latest()->get()
        ]);
    }
}
