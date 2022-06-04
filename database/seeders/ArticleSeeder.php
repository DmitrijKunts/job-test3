<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleComment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory(20)
            ->hasArticleComments(2)
            ->create();
    }
}
