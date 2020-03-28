<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaintenancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maintenances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('complex_id');
            $table->unsignedInteger('user_id');
            $table->enum('type', ['facility', 'elevator']);
            $table->timestamps();
        });



        Schema::create('equipment_maintenance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('equipment_id');
            $table->unsignedInteger('maintenances_id');
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
        Schema::dropIfExists('maintenances');
    }
}
