<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('charges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('complex_id');
            $table->enum('unit' ,['off', 'on'])->default('off')->nullable();
            $table->enum('static' ,['off', 'on'])->default('off')->nullable();
            $table->bigInteger('staticAmount')->nullable();
            $table->enum('meter' ,['off', 'on'])->default('off')->nullable();
            $table->bigInteger('meterAmount')->nullable();
            $table->enum('floor' ,['off', 'on'])->default('off')->nullable();
            $table->bigInteger('floorAmount')->nullable();
            $table->enum('person' ,['off', 'on'])->default('off')->nullable();
            $table->bigInteger('personAmount')->nullable();
            $table->enum('vacant' ,['off', 'on'])->default('off')->nullable();
            $table->bigInteger('vacantAmount')->nullable();
            $table->enum('automaticGenerate' ,['off', 'on'])->default('off')->nullable();
            $table->bigInteger('automaticGenerateDay')->nullable();
            $table->enum('rounding' ,['off', 'on'])->default('off')->nullable();
            $table->bigInteger('roundingAmount')->nullable();
            $table->enum('partialPayment' ,['off', 'on'])->default('off')->nullable();
            $table->bigInteger('partialPaymentPercent')->nullable();



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
        Schema::dropIfExists('charges');
    }
}
