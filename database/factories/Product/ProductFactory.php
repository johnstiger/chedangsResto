<?php

namespace Database\Factories\Product;

use App\Models\Product\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
          'name' => $this->faker->name,
          'price' => $this->faker->randomNumber($nbDigits = 3),
          'status' => $this->faker->randomElement([true,false]),
      ];
    }
}
