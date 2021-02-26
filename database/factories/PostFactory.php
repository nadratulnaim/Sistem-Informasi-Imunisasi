<?php

namespace Database\Factories;

// use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'category_id' => Category::factory()->rand(1, 3),
            // 'category_id' => Category::factory(),
            'user_id' => User::factory(),
            'judul_post' => $this->faker->sentence(),
            'slug' => Str::slug($this->faker->sentence()),
            'isi_post' => $this->faker->paragraph(10),
        ];
    }
}
