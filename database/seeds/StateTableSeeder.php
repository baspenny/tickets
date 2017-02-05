<?php

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->delete();

        App\State::create([
            'name' => 'New',
            'order' => '10',
        ]);
        App\State::create([
            'name' => 'Assigned',
            'order' => '20'
        ]);
        App\State::create([
            'name' => 'In progress',
            'order' => '21'
        ]);
        App\State::create([
            'name' => 'Closed',
            'order' => '99'
        ]);
    }
}
