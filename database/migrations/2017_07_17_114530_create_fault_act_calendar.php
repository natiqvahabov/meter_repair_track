<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaultActCalendar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fault_act_calendar', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('daily_execution_load_count');
            $table->integer('current_execution_load_count');
            $table->boolean('is_manual_set');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fault_act_calendar');
    }
}
