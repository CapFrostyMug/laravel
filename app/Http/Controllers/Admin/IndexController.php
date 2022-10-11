<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function create(Request $request, Category $category, News $news)
    {
        if ($request->isMethod('post')) {

            $request->flash();
            $news->insert($request->except('_token'));
            return view('admin.index');

        }
        return view('admin.create', [
            'categories' => $category->getNewsCategories(),
        ]);
    }

    public function downloadImage()
    {
        return response()->download('img01.jpg');
    }

    public function downloadNewsJsonFile(News $news)
    {
        $news = $news->getAllNews();
        return response()->json($news)
            ->header('Content-Disposition', 'attachment; filename = "json.txt"')
            ->setEncodingOptions(JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
