<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(){

        return view('berita', [
            'title' => 'Berita',
            'berita' => News::orderBy('updated_at','DESC')->get()
        ]);
    
    }

    public function getNewsData(int $id)
    {
        $news = News::findOrFail($id);

        // dd($news);
        return response()->json([
            'title' => $news->newsTitle,
            'gambar' => $news->gambar,
            'newsContent' => $news->newsContent,
        ]);
        
    }

    // public function show(News $news){
    //     return view('news', [
    //         'title' => 'PopBerita',
    //         'news' => $news
    //     ]);
    // }

    
}
