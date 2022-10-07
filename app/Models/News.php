<?php


namespace App\Models;


use Illuminate\Support\Facades\Storage;

class News
{
    /*private array $news = [
        [
            'id' => 1,
            'category_id' => 1,
            'title' => 'Ферстаппен выиграл Гран-при Италии и одержал одиннадцатую победу в сезоне',
            'text' => 'This is the news 1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores doloribus ea itaque laudantium maxime omnis optio repellat ut vero.',
            'isPrivate' => true,
        ],
        [
            'id' => 2,
            'category_id' => 1,
            'title' => 'Российский пилот Смоляр стал десятым в общем зачете «Формулы-3»',
            'text' => 'This is the news 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores doloribus ea itaque laudantium maxime omnis optio repellat ut vero.',
            'isPrivate' => true,
        ],
        [
            'id' => 3,
            'category_id' => 2,
            'title' => 'Ferrari сделала по спецзаказу единственное в своем роде авто',
            'text' => 'This is the news 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores doloribus ea itaque laudantium maxime omnis optio repellat ut vero.',
            'isPrivate' => false,
        ],
        [
            'id' => 4,
            'category_id' => 2,
            'title' => 'У BMW появился новый флагман — большой кроссовер XM',
            'text' => 'This is the news 4. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores doloribus ea itaque laudantium maxime omnis optio repellat ut vero.',
            'isPrivate' => false,
        ],
        [
            'id' => 5,
            'category_id' => 3,
            'title' => 'Звезда «Друзей» получила роль в новом сериале',
            'text' => 'This is the news 5. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores doloribus ea itaque laudantium maxime omnis optio repellat ut vero.',
            'isPrivate' => false,
        ],
        [
            'id' => 6,
            'category_id' => 3,
            'title' => 'Брюс Уиллис продал права на свой образ российской компании Deepfake',
            'text' => 'This is the news 6. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores doloribus ea itaque laudantium maxime omnis optio repellat ut vero.',
            'isPrivate' => false,
        ],
        [
            'id' => 7,
            'category_id' => 4,
            'title' => 'В Epic Games Store началась бесплатная раздача двух игр',
            'text' => 'This is the news 7. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores doloribus ea itaque laudantium maxime omnis optio repellat ut vero.',
            'isPrivate' => false,
        ],
        [
            'id' => 8,
            'category_id' => 4,
            'title' => 'В сериале «Андор» заметили отсылку к Star Wars: The Force Unleashed',
            'text' => 'This is the news 8. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores doloribus ea itaque laudantium maxime omnis optio repellat ut vero.',
            'isPrivate' => false,
        ],
        [
            'id' => 9,
            'category_id' => 5,
            'title' => 'Как сохранить сердце здоровым: 10 простых способов',
            'text' => 'This is the news 9. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores doloribus ea itaque laudantium maxime omnis optio repellat ut vero.',
            'isPrivate' => false,
        ],
        [
            'id' => 10,
            'category_id' => 5,
            'title' => 'Кардиолог развеял мифы о популярных средствах от похмелья',
            'text' => 'This is the news 10. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores doloribus ea itaque laudantium maxime omnis optio repellat ut vero.',
            'isPrivate' => false,
        ],
    ];*/
    private Category $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getAllNews(): array
    {
        return json_decode(Storage::disk('local')->get('news.json'), true);
        //return $this->news;
    }

    public function getNewsByCategorySlug($slug): array
    {
        $id = $this->category->getCategoryIdBySlug($slug);
        $news = [];

        foreach ($this->getAllNews() as $item) {
            if ($item['category_id'] == $id) {
                $news[] = $item;
            }
        }
        return $news;
    }

    public function getNewsText($newsId): ?array
    {
        foreach ($this->getAllNews() as $news) {
            if ($news['id'] == $newsId) {
                return $news;
            }
        }
    }

    public function saveToFile($news)
    {
        Storage::disk('local')->put('news.json', json_encode($news), JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }
}
