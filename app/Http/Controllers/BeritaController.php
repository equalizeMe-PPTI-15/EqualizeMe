<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class BeritaController extends Controller
{

    public function index(){

        return view('berita', [
            'title' => 'Berita',
            'berita' => News::orderBy('updated_at','DESC')->filter(request(['filtercarinews']))->get()
            // 'berita' => News::orderBy('updated_at','DESC')->get()
        ]);
    
    }

    public function getNewsData(int $id)
    {
        $news = News::findOrFail($id);
        
        $imageURL = asset('../../Image/' . $news->gambar);
        // dd($news);
        return response()->json([
            'title' => $news->newsTitle,
            'gambar' => $imageURL,
            'newsContent' => $news->newsContent,
        ]);
        
    }

    // public function search(Request $request){
    //     $search_text = $request->input('search');
    //     $thenews = News::where('heading', 'like', '%'.$search_text.'%')->get();

    //     return view('thenews.search', compact('thenews', 'search_text'));
    // }

    // public function show(News $news){
    //     return view('news', [
    //         'title' => 'PopBerita',
    //         'news' => $news
    //     ]);
    // }

    
}
