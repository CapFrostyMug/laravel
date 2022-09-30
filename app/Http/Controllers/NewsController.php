<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function showNewsText($newsId)
    {
        $newsText = News::getNewsText($newsId);
        return view('news.newsText')->with('newsText', $newsText);
    }
}
