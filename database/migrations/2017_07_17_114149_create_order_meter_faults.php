<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderMeterFaults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_meter_faults', function (Blueprint $table) {
            $table->increments('id');
        //    $table->foreign('order_meter_id')->references('id')->on('order_meters');  order_meter_faults_order_meter_id_foreign
            $table->string('fault_act_number');
            $table->date('fault_act_date');
            $table->date('expire_date');

            $table->date('due_date');

            $table->string('repair_act_number');
            $table->date('repair_act_date');
            
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
        Schema::dropIfExists('order_meter_faults');
    }
}
