<?php

namespace Tests\Browser\Admin;

use App\Models\News;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NewsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testCreateForm()
    {
        $news = News::factory()->create();

        $this->browse(static function (Browser $browser) use ($news) {
            $browser->visit('/admin/create')
                ->type('category_id', $news->category_id)
                ->type('title', $news->title)
                ->type('text', $news->text)
                ->type('is_private', $news->is_private)
                ->press('save')
            ->assertPathIs('/categories/{category}/{news}');
        });
    }
}
