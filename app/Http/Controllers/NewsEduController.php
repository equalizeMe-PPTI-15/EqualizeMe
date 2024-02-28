<?php

namespace App\Http\Controllers;
use App\Models\Education;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsEduController extends Controller
{
    public function index(User $user){
        return view('home', [
            "title" => "news",
            "news" => News::latest()->get(),
            "edu_title" => "education",
            "education" => Education::latest()->get(),
            "akuns" => $user
        ]);
    }

    public function index2(){
        return view('home', [
            "title" => "news",
            "news" => News::latest()->get(),
            "edu_title" => "education",
            "education" => Education::latest()->get()
        ]);
    }
}
