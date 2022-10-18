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
        $allNews = $news->getAllNews(); // Пока оставил так; работа через модель, чтобы не дублировать функционал.
        return view('admin.editorList')->with('allNews', $allNews);
    }

    /*public function downloadImage()
    {
        return response()->download('img01.jpg');
    }*/

    /*public function downloadNewsJsonFile(News $news)
    {
        $news = $news->getAllNews();
        return response()->json($news)
            ->header('Content-Disposition', 'attachment; filename = "json.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }*/
}
