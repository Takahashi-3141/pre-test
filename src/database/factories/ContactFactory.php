<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        return [
            'category_id' => $this->faker->randomNumber(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement([1, 2, 3]),
            'email' => $this->faker->unique()->safeEmail,
            'tel' => $this->faker->phoneNumber(),
            'address' => $this->faker->city . $this->faker->streetAddress,
            'building' => $this->faker->secondaryAddress,
            'detail' => $this->faker->realText(10),
        ];
    }
}
