<?php


namespace App\Models;


class News
{
    private static $news = [
        [
            'id' => 1,
            'category_id' => 1,
            'title' => 'Ферстаппен выиграл Гран-при Италии и одержал одиннадцатую победу в сезоне',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores doloribus ea itaque laudantium maxime omnis optio repellat ut vero.'
        ],
        [
            'id' => 2,
            'category_id' => 1,
            'title' => 'Российский пилот Смоляр стал десятым в общем зачете «Формулы-3»',
        ],
        [
            'id' => 3,
            'category_id' => 1,
            'title' => 'Леклер выиграл квалификацию «Гран-при Италии»',
        ],
        [
            'id' => 4,
            'category_id' => 1,
            'title' => 'Ферстаппен выиграл домашний «Гран-при Нидерландов»',
        ],
        [
            'id' => 5,
            'category_id' => 2,
            'title' => 'Ferrari сделала по спецзаказу единственное в своем роде авто',
        ],
        [
            'id' => 6,
            'category_id' => 2,
            'title' => 'У BMW появился новый флагман — большой кроссовер XM',
        ],
        [
            'id' => 7,
            'category_id' => 2,
            'title' => 'Вышло новое поколение суперпикапов — Ford Super Duty',
        ],
        [
            'id' => 8,
            'category_id' => 2,
            'title' => 'Citroen сменил логотип: теперь он как 100 лет назад',
        ],
        [
            'id' => 9,
            'category_id' => 3,
            'title' => 'Звезда «Друзей» получила роль в новом сериале',
        ],
        [
            'id' => 10,
            'category_id' => 3,
            'title' => 'Брюс Уиллис продал права на свой образ российской компании Deepfake',
        ],
        [
            'id' => 11,
            'category_id' => 3,
            'title' => 'Александр Петров рассказал о конкуренции с Козловским на съемках',
        ],
        [
            'id' => 12,
            'category_id' => 3,
            'title' => 'Карл III раскритиковал сериал «Корона» о королевской семье',
        ],
        [
            'id' => 13,
            'category_id' => 4,
            'title' => 'В Epic Games Store началась бесплатная раздача двух игр',
        ],
        [
            'id' => 14,
            'category_id' => 4,
            'title' => 'В сериале «Андор» заметили отсылку к Star Wars: The Force Unleashed',
        ],
        [
            'id' => 15,
            'category_id' => 4,
            'title' => 'В «М.Видео» и «Эльдорадо» стартовали продажи ремейка The Last of Us',
        ],
        [
            'id' => 16,
            'category_id' => 4,
            'title' => 'В Steam вышел симулятор пивовара Brewmaster',
        ],
        [
            'id' => 17,
            'category_id' => 5,
            'title' => 'Как сохранить сердце здоровым: 10 простых способов',
        ],
        [
            'id' => 18,
            'category_id' => 5,
            'title' => 'Кардиолог развеял мифы о популярных средствах от похмелья',
        ],
        [
            'id' => 19,
            'category_id' => 5,
            'title' => 'Изучен эффект кофе на продолжительность жизни',
        ],
        [
            'id' => 20,
            'category_id' => 5,
            'title' => 'Вода и тревожность: как питье помогает успокоиться',
        ],
    ];

    public static function getNews(): array
    {
        return static::$news;
    }

    public static function getTitles($id): ?array
    {
        foreach (static::getNews() as $news) {
            if ($news['category_id'] == $id) {
                $newArr[] = $news;
            }
        }
        return $newArr;
    }

    public static function getNewsText($id): ?array
    {
        foreach (static::getNews() as $news) {
            if ($news['id'] == $id) {
                return $news;
            }
        }
        return null;
    }
}
