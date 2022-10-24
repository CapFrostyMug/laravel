<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function getNews(News $news)
    {
        $news = $news::query()->get();
        return view('admin.editorList')->with('news', $news);
    }
}
