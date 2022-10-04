<?php


namespace App\Http\Controllers;


use App\Models\News;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    public function showNews(News $newsText, $categoryId, $newsId)
    {
        $newsText = $newsText->getNewsText($newsId);
        return view('news.text')->with('newsText', $newsText);
    }
}
