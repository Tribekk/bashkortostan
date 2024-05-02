<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $news = News::all();
        return view('news', compact('news'));
    }

    public function show(Request $request){
        $id = $request->id;
        $new = News::query()->where('id', '=', $id)->get();
        return view('newsId', compact('new'));
    }
}
