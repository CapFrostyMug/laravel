<?php


namespace App\Models;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Category
{
    public function getNewsCategories(): array
    {
        return DB::select("SELECT * FROM categories");
    }

    public function getCategoryIdBySlug($slug)
    {
        $id = null;

        foreach ($this->getNewsCategories() as $category) {
            if (($category->slug) == $slug) {
                $id = $category->id;
                break;
            }
        }
        return $id;
    }
}
