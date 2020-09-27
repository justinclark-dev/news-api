<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $article = new \App\Models\Article([
            'title' => 'News article #1 - Title',
            'body' => 'News article #1 - Body'
        ]);
        $article->save();

        $article = new \App\Models\Article([
            'title' => 'News article #2 - Title',
            'body' => 'News article #2 - Body'
        ]);
        $article->save();

        $article = new \App\Models\Article([
            'title' => 'News article #3 - Title',
            'body' => 'News article #3 - Body'
        ]);
        $article->save();
    }
}
