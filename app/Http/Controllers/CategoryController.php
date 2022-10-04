<?php


namespace App\Http\Controllers;


use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function showNewsCategories(Category $categories)
    {
        $categories = $categories->getNewsCategories();
        return view('news.categories')->with('categories', $categories);
    }

    public static function showNews(News $newsTitles, $categoryId)
    {
        $newsTitles = $newsTitles->getNewsByCategorySlug($categoryId);
        return view('news.titles')->with('newsTitles', $newsTitles);
    }
}
