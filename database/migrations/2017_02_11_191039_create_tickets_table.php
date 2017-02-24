<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ticket_number');
            $table->integer('state_id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('solution')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_tel_nr')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('rep_id')->nullable();
            $table->timestamp('time_closed')->nullable();
            $table->timestamp('time_trigger')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
