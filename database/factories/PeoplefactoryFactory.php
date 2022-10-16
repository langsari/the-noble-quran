<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeoplefactoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Model::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $factory->define(App\People::class, function (Faker $faker) {
            return [
                'name' => $faker->name,
                'address' => $faker->address,
                'age' => mt_rand(18, 150),
            ];
            });
        }
}
