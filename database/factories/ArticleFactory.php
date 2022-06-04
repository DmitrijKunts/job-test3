<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\ArticleTag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence();
        return [
            'title' => $title,
            'slug' => Str::of("$title " . $this->faker->numberBetween(1000, 100000))->slug('-'),
            'cover' => $this->faker->imageUrl(640, 480, 'animals', true),
            'body' => $this->faker->text(500),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Article $article) {
            $tags = ArticleTag::query()->limit(rand(1, 5))->inRandomOrder()->get();
            $article->tags()->attach($tags);
        });
    }
}
