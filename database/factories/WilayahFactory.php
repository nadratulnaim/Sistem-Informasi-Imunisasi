<?php

namespace Database\Factories;

use App\Models\Wilayah;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class WilayahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Wilayah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'bayi_id' => User::factory(),
            'nama_wilayah' => $this->faker->sentence(),
            'slug' => Str::slug($this->faker->sentence()),
        ];
    }
}
