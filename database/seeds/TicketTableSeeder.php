<?php

use Illuminate\Database\Seeder;

class TicketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->delete();

        App\Ticket::create([
            'ticket_number' => 'TT-15-00001',
            'title' => 'Printer malfunction',
            'state_id' => 1,
            'description' => 'Printer is not working again on the third floor',
            'rep_id' => 1
        ]);
        App\Ticket::create([
            'ticket_number' => 'TT-15-00002',
            'title' => 'Test ticket TT-15-00002',
            'state_id' => 1,
            'description' => 'This is the description of ticket TT-15-00002',
            'rep_id' => 1
        ]);
        App\Ticket::create([
            'ticket_number' => 'TT-15-00003',
            'title' => 'Scanning software is importing double pages',
            'state_id' => 1,
            'description' => 'Probably the scanning software is not configured correctly',
            'rep_id' => 2
        ]);
        App\Ticket::create([
            'ticket_number' => 'TT-15-00004',
            'title' => 'User John Doe cannot logon to domain',
            'state_id' => 1,
            'description' => 'This is the second time this occurs',
            'rep_id' => 3
        ]);
    }
}
