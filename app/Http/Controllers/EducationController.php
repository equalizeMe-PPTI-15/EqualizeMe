<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EducationController extends Controller
{
    public function index(){
        return view('education', [
            "title" => "education",
            "educations" => Education::latest()->filter(request(['filtercari']))->get()
        ]);
    }
}
