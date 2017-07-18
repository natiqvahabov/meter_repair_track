<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderMeterFaultShareParts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_meter_fault_share_parts', function (Blueprint $table) {
            $table->increments('id');
          /*  $table->foreign('order_meter_fault_id')->references('id')->on('order_meter_faults');  order_meter_fault_share_parts_order_meter_fault_id_foreign
            $table->foreign('share_part_id')->references('id')->on('order_meters');
        order_meter_fault_share_parts_share_part_id_foreign
             */
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
