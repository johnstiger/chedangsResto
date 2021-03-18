<?php

namespace Database\Factories\Customer;

use App\Models\Customer\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
          'firstname' => $this->faker->firstname,
          'lastname' => $this->faker->lastname,
          'address' => $this->faker->address,
          'contact_number'=>$this->faker->phoneNumber,
          'status'=> $this->faker->randomElement([true,false])
      ];
    }
}
