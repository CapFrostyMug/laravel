<?php


namespace App\Models;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class News
{
    private Category $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getAllNews()
    {
        return DB::table('news')->get();
    }

    public function getNewsByCategorySlug($slug): array
    {
        $id = $this->category->getCategoryIdBySlug($slug);
        $news = [];

        foreach ($this->getAllNews() as $item) {
            if (($item->category_id) == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }

    public function getNewsText($newsId)
    {
        foreach ($this->getAllNews() as $news) {
            if (($news->id) == $newsId) {
                return $news;
            }
        }
    }

    public function saveToFile($news)
    {
        Storage::disk('local')->put('news.json', json_encode($news), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
