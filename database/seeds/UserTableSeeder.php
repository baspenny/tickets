<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        App\User::create([
            'first_name' => 'Sebastiaan',
            'infix' => '',
            'last_name' => 'Boelhouwer',
            'email' => 'bboelhouwer@outlook.com',
            'user_type' => 'admin',
            'password' => \Illuminate\Support\Facades\Hash::make('Welkom01')
        ]);
        App\User::create([
            'first_name' => 'Wendy',
            'infix' => '',
            'last_name' => 'Boelhouwer',
            'email' => 'wendyisblij@gmail.com',
            'user_type' => 'admin',
            'password' => \Illuminate\Support\Facades\Hash::make('Welkom01')
        ]);
        App\User::create([
            'first_name' => 'Jordan',
            'infix' => '',
            'last_name' => 'Boelhouwer',
            'email' => 'jjboelhouwer@outlook.com',
            'user_type' => 'admin',
            'password' => \Illuminate\Support\Facades\Hash::make('Welkom01')
        ]);
    }
}
