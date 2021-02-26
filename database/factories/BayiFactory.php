<?php

namespace Database\Factories;

use App\Models\Bayi;
use App\Models\Wilayah;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BayiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bayi::class;

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
            // 'wilayah_id' => Bayi::factory(),
            'wilayah_id' => Wilayah::factory(),
            'nama_bayi' => $this->faker->sentence(),
            'slug' => Str::slug($this->faker->sentence()),
            'jenis_kelamin' => $this->faker->sentence(),
            'tanggal_lahir' => $this->faker->date(),
            'alamat' => $this->faker->sentence(),
            'nama_orangtua' => $this->faker->sentence(),
            'keterangan' => $this->faker->sentence(),
        ];
    }
}
