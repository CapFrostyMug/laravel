<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function formHandler(Request $request, Category $category, $newsId = null)
    {
        $formData = $request->except('_token');

        if ($request->isMethod('post')) {

            $request->flash();

            DB::table('news')
                ->updateOrInsert(
                    ['id' => $newsId],
                    $formData
                );

            if ($newsId) {
                return redirect()->route('news-text', [$formData['category_id'], $newsId]);
            }

            $lastId = (DB::table('news')->get()->last())->id;
            return redirect()->route('news-text', [$formData['category_id'], $lastId]);

        }

        if ($newsId) {

            $oneNews = DB::table('news')
                ->where('id', '=', $newsId)
                ->get();

            if (empty($oneNews[0])) {
                return abort(404);
            }

            return view('admin.editorForm', [
                'categories' => $category->getNewsCategories(),
                'oneNews' => $oneNews[0],
            ]);

        }

        return view('admin.createForm', [
            'categories' => $category->getNewsCategories(),
        ]);
    }
}
