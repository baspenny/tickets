<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\Console\Helper\Table;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        \App\User::create([
                'first_name' => 'Sebastiaan',
                'last_name' => 'Penny',
                'email' => 's.penny@none.com',
                'user_type' => 1,
                'telephone_nr' => '0612345678',
                'password' => Hash::make('Welkom01')
            ]
        );

        \App\User::create([
                'first_name' => 'Han',
                'last_name' => 'Solo',
                'email' => 'h.solo@milleniumfalcon.com',
                'user_type' => 1,
                'telephone_nr' => '0612345678',
                'password' => Hash::make('Welkom01')
            ]
        );

        \App\User::create([
                'first_name' => 'Prinses',
                'last_name' => 'Layla',
                'email' => 'p.rincess@none.com',
                'user_type' => 1,
                'telephone_nr' => '0612345678',
                'password' => Hash::make('Welkom01')
            ]
        );
    }
}
