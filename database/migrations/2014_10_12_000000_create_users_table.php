<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fName');
            $table->string('lName');
            $table->string('code')->nullable();
            $table->unsignedInteger('complex_id');
            $table->unsignedInteger('area')->nullable();
            $table->unsignedInteger('charge')->nullable();
            $table->string('mobile1');
            $table->string('mobile2')->nullable();
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->enum('userType', ['superAdmin', 'admin', 'boardMember', '']);
            $table->enum('userStatus', ['enable', 'disable'])->default('enable');
            $table->enum('propertyStatus', ['resident', 'empty']);
            $table->enum('residentType', ['owner', 'tenant']);
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
