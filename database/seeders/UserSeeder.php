<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Miguel Ticona',
            'email' => 'miguel@gmail.com',
            'code' => 'SIS12345678',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('Administrador');

        User::factory(50)->create();

    }
}
