<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FaqController extends Controller
{
    public function index()
    {
        return view('faq', [
            'pertanyaan' => "FAQ",
            'faqs' => Faq::all(),
        ]);
    }
}
