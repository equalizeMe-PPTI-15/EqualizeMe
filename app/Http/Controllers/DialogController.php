<?php

namespace App\Http\Controllers;

use App\Models\Dialog;
use App\Http\Requests\StoredialogRequest;
use App\Http\Requests\UpdatedialogRequest;

class DialogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('helpme', [
            'judul' => "Dialogs",
            'dialogs' => Dialog::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show(Dialog $dialog)
    {
        $lokasi = $this->formatString($dialog->lokasi);
        return view('helpme2',[
            'judul' => 'Single Dialog',
            'dialog' => $dialog,
            'lokasi' => $lokasi,
        ]);
    }

    public function formatString($string){
        // Pisahkan string berdasarkan tanda "+"
        $parts = explode('+', $string);
        return $parts;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredialogRequest $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(dialog $dialog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatedialogRequest $request, dialog $dialog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(dialog $dialog)
    {
        //
    }
}
