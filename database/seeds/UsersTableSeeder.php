<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Prof. Felipe Sánchez',
            'email' => 'cybercomxal@hotmail.com',
            'password' => bcrypt('123456'),
            'ine' => '12345678',
            'address' => '',
            'phone' => '',
            'role' =>'admin'
        ]);
        factory(User::class, 50)->create();
    }
}
