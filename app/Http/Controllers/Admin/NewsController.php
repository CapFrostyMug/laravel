<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\CreateRequest;
use App\Http\Requests\News\EditorRequest;
use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function addNews(CreateRequest $request, Category $category, News $news)
    {
        if ($request->isMethod('post')) {

            $request->validated();

            $request->flash();
            $news->fill($request->except('_token'));
            $news->save();

            $lastNews = $news->fresh();
            return redirect()->route('news-text', [$lastNews->category_id, $lastNews->id]);
        }

        return view('admin.createForm')->with('categories', $category::query()->get());
    }

    public function editNews(EditorRequest $request, Category $category, News $news)
    {
        if ($request->isMethod('post')) {

            $request->validated();

            $news->fill($request->except('_token'));
            $news->save();

            return redirect()->route('news-text', [$news->category_id, $news->id]);
        }

        return view('admin.editorForm')->with([
            'categories' => $category::query()->get(),
            'news' => $news,
        ]);
    }

    public function addNewsFromResource($data)
    {
        foreach ($data as $key => $value) {
            foreach ($value as $key1 => $value1) {
                $values[] = $value1;
                (new News)::create(
                    [
                        'category_id' => $value1['category'],
                        'title' => $value1['title'],
                        'text' => $value1['description'],
                        'is_private' => 0,
                    ]
                );
            }
        }
    }
}
