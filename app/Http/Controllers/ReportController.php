<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index() {
        return view('pengaduan', [
            'title' => 'report'
        ]);
    }

    public function store (Request $request) {
        $validatedData = $request->validate([
            'incidentAddress' => 'required|max:255',
            'dateOfIncident' => 'required|date',
            'description' => 'required|min:8|max:255'
            // 'created_at' => 'exclude',
            // 'updated_at' => 'exclude'
            // 'gambar hehe gatau ntar ae'
        ]);

        Report::create($validatedData);

        $request->session()->flash('reported', 'Thank you for your report.. we will review it ASAP.');

        return redirect('/pengaduan');
    }
}