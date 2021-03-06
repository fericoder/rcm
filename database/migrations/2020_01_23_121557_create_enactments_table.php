<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnactmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enactments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('complex_id');
            $table->bigInteger('proceeding_id')->unsigned();
            $table->unsignedInteger('number');
            $table->text('description');
            $table->unsignedInteger('user_id');
            $table->timestamp('deadline')->default(now())->nullable();
            $table->text('resualt')->nullable();
            $table->enum('status', ['انجام شده', 'درحال انجام', 'معلق', 'لغو شده', 'بررسی نشده'])->default('بررسی نشده');
            $table->timestamps();


            $table->foreign('proceeding_id')->references('id')->on('proceedings')->onDelete('cascade');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enactments');
    }
}
