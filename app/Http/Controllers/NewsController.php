<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $articles = Article::orderBy('id','desc')
        ->get(['id','little_image','text','title','description','published_at']);
        // dd($articles);
        return view('news',['articles' => $articles]);
    }


    public function show($id){
        $article = Article::findOrFail($id);  
        $_meta_img = $article->big_image; 
        $_title = $article->title; 
        $_desc = $article->description;

        return view('single')->with([
            'article' => $article,
            '_meta_img' => $_meta_img,
            '_title' => $_title,
            '_desc' => $_desc,
        ]);

    }
}
