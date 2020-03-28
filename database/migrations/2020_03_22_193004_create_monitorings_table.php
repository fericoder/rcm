<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonitoringsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monitorings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('complex_id');
            $table->string('date');
            $table->unsignedInteger('user_id');
            $table->string('hour_from');
            $table->string('hour_to');
            $table->string('camera_active_before');
            $table->string('camera_active_after');
            $table->string('camera_deactive_before');
            $table->string('camera_deactive_after');
            $table->text('camera_fault')->nullable();
            $table->text('camera_actions')->nullable();
            $table->string('pelak_before');
            $table->string('pelak_after');
            $table->text('pelak_actions')->nullable();
            $table->string('detectors_enable');
            $table->string('detectors_disable');
            $table->string('sound_count');
            $table->text('detector_cause')->nullable();
            $table->text('detector_location')->nullable();
            $table->text('detector_actions')->nullable();
            $table->string('penalty_count');
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
        Schema::dropIfExists('monitorings');
    }
}
