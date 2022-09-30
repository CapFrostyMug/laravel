<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Categories::getCategories();
        return view('news.categories')->with('categories', $categories);
    }

    public static function showNewsTitles($id)
    {
        $newsTitles = News::getTitles($id);
        /*$currentURL = url()->current();
        dd($currentURL);*/
        return view('news.newsTitles')->with('newsTitles', $newsTitles);
    }
}
