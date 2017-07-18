<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderMeter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_meters', function (Blueprint $table) {
            $table->increments('id');
           // $table->foreign('order_id')->references('id')->on('orders'); order_meters_order_id_foreign
            //$table->foreign('meter_id')->references('id')->on('meters'); order_meters_meter_id_foreign
            $table->string('corrector_number');
            $table->string('corrector_mark');

           // $table->foreign('region_id')->references('id')->on('regions'); order_meters_region_id_foreign
           // $table->foreign('city_id')->references('id')->on('cities'); order_meters_city_id_foreign
           // $table->foreign('order_type_id')->references('id')->on('order_types'); order_meters_order_type_id_foreign

            $table->string('received_by');
            $table->dateTime('received_date');
           // $table->foreign('status_id')->references('id')->on('statuses'); order_meters_status_id_foreign
            $table->string('reply_number');
            $table->dateTime('reply_date');
          //  $table->foreign('inspection_result_id')->references('id')->on('inspection_results'); order_meters_inspection_result_id_foreign
            $table->date('meter_remove_date');
            $table->string('meter_remove_number');
            $table->string('owner_name'); 
            $table->date('prev_insp_date');
            $table->string('prev_insp_mech_indicator_number');
            $table->string('prev_insp_elec_indicator_vbt_number');
            $table->string('prev_insp_elec_indicator_vt_number');
            $table->date('current_insp_date');
            $table->string('current_insp_mech_indicator_number');
            $table->string('current_insp_elec_indicator_vbt_number');
            $table->string('current_insp_elec_indicator_vt_number');
            $table->string('result_qmin');
            $table->string('result_qmax');
            $table->string('result_qnom');
            $table->string('impuls_transmitter_status');
            $table->string('battery_use_length');
            $table->longText('inspection_result');
            $table->date('due_date');
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
        Schema::dropIfExists('order_meters');
    }
}
