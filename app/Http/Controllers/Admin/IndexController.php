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

            $allNews = $news->getAllNews(); // получаем все новости
            $formData = $request->except('_token'); // получаем данные из формы; либо $request->all();

            $formData['id'] = end($allNews)['id'] + 1; // вычисляем новый id

            $allNews[] = $formData; // записываем данные из формы в массив со всеми новостями

            $news->saveToFile($allNews);
            return redirect()->route('news-text', [$formData['category_id'], $formData['id']]);

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
