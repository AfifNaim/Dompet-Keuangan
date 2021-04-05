<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AkunFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>'ini akun Admin',
            'email'=>'afifnaim24@gmail.com',
            'password'=> bcrypt('afifnaim24'),
            'level'=>'admin',
        ];
    }
}
