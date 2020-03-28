<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->unsignedInteger('complex_id');
            $table->text('title');
            $table->text('description');
            $table->string('requestedFrom');
            $table->string('addedById');
            $table->string('addedByName');
            $table->string('scope');
            $table->enum('status', ['درحال پیگیری', 'پاسخ داده شده' ,'تایید شده']);
            $table->string('attachment')->nullable();
            $table->string('doerDescription')->nullable();
            $table->string('doerfullName')->nullable();
            $table->string('doerUserId')->nullable();
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
        Schema::dropIfExists('tickets');
    }
}
