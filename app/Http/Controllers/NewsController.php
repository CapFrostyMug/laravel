<?php


namespace App\Http\Controllers;


use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;


class NewsController extends Controller
{
    public function getOneNews(Category $category, News $news)
    {
        $news = $news::query()
            ->where('id', $news->id)
            ->get();

        if (!$news) {
            return abort(404);
        }

        return view('news.text')->with('news', $news);
    }
}
