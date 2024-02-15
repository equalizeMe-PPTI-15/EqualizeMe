<?php

namespace App\Http\Controllers;
use App\Models\Education;
use App\Models\News;
use Illuminate\Http\Request;

class NewsEduController extends Controller
{
    public function index(){
        return view('home', [
            "title" => "news",
            "news" => News::latest()->get(),
            "edu_title" => "education",
            "education" => Education::latest()->get()
        ]);
    }
}
