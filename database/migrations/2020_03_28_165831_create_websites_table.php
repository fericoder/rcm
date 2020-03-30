<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('complex_id');
            $table->text('slogan')->default('');
            $table->text('description')->default('');
            $table->string('hypermarket')->default('off');
            $table->string('cinema')->default('off');
            $table->string('salonbadansazi')->default('off');
            $table->string('mahdekoodak')->default('off');
            $table->string('barghezterari')->default('off');
            $table->string('coffeshop')->default('off');
            $table->string('labi')->default('off');
            $table->string('arayeshgahzanane')->default('off');
            $table->string('arayeshgahmardane')->default('off');
            $table->string('masaj')->default('off');
            $table->string('pent')->default('off');
            $table->string('salontadris')->default('off');
            $table->string('charge')->default('off');
            $table->string('amfi')->default('off');
            $table->string('ketabkhune')->default('off');
            $table->string('asansor')->default('off');
            $table->string('bms')->default('off');
            $table->string('harigh')->default('off');
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
        Schema::dropIfExists('websites');
    }
}
