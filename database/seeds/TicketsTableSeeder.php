<?php

use App\Ticket;
use Illuminate\Database\Seeder;

class TicketsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->delete();

        Ticket::create([
                'ticket_number' => 'TT-17-00001',
                'state_id' => 1,
                'title' => 'Printer malfunction',
                'description' => 'The printer on the second floor remains in error. Can you please assist.',
                'user_id' => 2,
                'rep_id' => 1
            ]
        );
        Ticket::create([
                'ticket_number' => 'TT-17-00002',
                'state_id' => 1,
                'title' => 'Help with installing sofware',
                'description' => 'The printer on the second floor remains in error. Can you please assist.',
                'user_id' => 3,
                'rep_id' => 1
            ]
        );
        Ticket::create([
                'ticket_number' => 'TT-17-00003',
                'state_id' => 4,
                'title' => 'Help... My computer has crashed',
                'description' => 'Damnit........',
                'user_id' => 1,
                'rep_id' => 2
            ]
        );
        Ticket::create([
                'ticket_number' => 'TT-17-00004',
                'state_id' => 5,
                'title' => 'Help with installing sofware',
                'description' => 'The printer on the second floor remains in error. Can you please assist.',
                'user_id' => 1,
                'rep_id' => 3
            ]
        );
        Ticket::create([
                'ticket_number' => 'TT-17-00005',
                'state_id' => 1,
                'title' => 'Can you output some data?',
                'description' => 'Could you please deliver me the rapports.',
                'user_id' => 1,
                'rep_id' => 2
            ]
        );
    }
}
