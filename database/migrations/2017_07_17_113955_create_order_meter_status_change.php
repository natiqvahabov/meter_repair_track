<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderMeterStatusChange extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_meter_status_change', function (Blueprint $table) {
            $table->increments('id');
          //  $table->foreign('order_meter_id')->references('id')->on('order_meters');  order_meter_status_change_order_meter_id_foreign
            //$table->foreign('status_id')->references('id')->on('statuses'); order_meter_status_change_status_id_foreign
            //$table->foreign('user_id')->references('id')->on('users');  order_meter_status_change_user_id_foreign
            $table->dateTime('change_date'); 
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
        Schema::dropIfExists('order_meter_status_change');
    }
}
