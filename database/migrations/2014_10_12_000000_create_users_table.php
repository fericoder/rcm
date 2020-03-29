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
            $table->string('fullName');
            $table->string('tower')->nullable();
            $table->string('floor');
            $table->string('unit');
            $table->string('code')->nullable();
            $table->string('parking_code')->nullable();
            $table->unsignedInteger('parking_count')->nullable();
            $table->unsignedInteger('complex_id');
            $table->float('area')->nullable();
            $table->unsignedInteger('charge')->nullable();
            $table->string('mobile');
            $table->string('phone1')->nullable();
            $table->string('phone2')->nullable();
            $table->enum('userType', ['superAdmin', 'admin', 'boardMember', 'user'])->default('user');
            $table->enum('userStatus', ['enable', 'disable'])->default('enable');
            $table->enum('propertyStatus', ['resident', 'empty'])->nullable();
            $table->enum('residentType', ['owner', 'tenant'])->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('avatar')->nullable();
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
