<?php

use App\State;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();

        State::create([
           'name' => 'New',
            'order' => 10
        ]);
        State::create([
            'name' => 'Assigned',
            'order' => 20
        ]);
        State::create([
            'name' => 'In progress',
            'order' => 30
        ]);
        State::create([
            'name' => 'On hold',
            'order' => 40
        ]);
        State::create([
            'name' => 'Closed',
            'order' => 99
        ]);
    }
}
