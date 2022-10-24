<?php


namespace App\Http\Controllers;


use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function getCategories(Category $category)
    {
        $categories = $category::query()->get();
        return view('news.categories')->with('categories', $categories);
    }

    public function getNews(News $news, Category $category)
    {
        $news = $news::query()
            ->where('category_id', $category->id)
            ->get();
        return view('news.titles')->with('news', $news);
    }
}
