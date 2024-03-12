<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class quizController extends Controller
{
    public function index () {
        return view('quiz1', [
            'title' => 'quiz1'
        ]);
    }
}
