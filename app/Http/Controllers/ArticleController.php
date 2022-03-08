<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index() {
        return view('article', [
            "name" => "Helsa Nesta Dhaifullah",
            "email" => "helsa.205025@mhs.its.ac.id",
            "articles" => Article::all()
        ]);
    }

    public function contents(Article $article){
        return view('konten', [
            "article" => $article
        ]);
    }
}
