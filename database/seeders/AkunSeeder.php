<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = [
        //     [
        //         'name'=>'ini akun Admin',
        //         'email'=>'afifnaim24@gmail.com',
        //         'password'=> bcrypt('afifnaim24'),
        //         'level'=>'admin',
        //     ],
        // ];

        // foreach ($user as $key => $value) {
        //     User::create($value);
        // }
        // factory(User::class, 1)->create();
        User::factory()->count(1)->create();
    }
}
