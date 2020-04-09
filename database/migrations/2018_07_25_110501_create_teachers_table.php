<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->string('teachID',64)->primary();
            $table->string('sregistercode',164);
            $table->string('title',124)->nullable();
            $table->string('name',244)->nullable();
            $table->string('firstname',122)->nullable();
            $table->string('lastname',122)->nullable();
            $table->string('phonenumber',122)->nullable();
            $table->string('schoolID',124)->nullable();
            $table->string('gradeID',124)->nullable();
            $table->string('email',124)->unique()->nullable();
            $table->string('prfpic',244)->default('/images/avatar.png');
            $table->string('abme',1244)->nullable();
            $table->string('intres',244)->nullable();
            $table->integer('roleID')->nullable();
            $table->integer('status')->default('0');
            $table->string('password',244);
            $table->rememberToken()->nullable();
            $table->boolean('activated')->default(false);
            $table->string('token',122)->nullable();
            $table->ipAddress('signup_ip_address')->nullable();
            $table->ipAddress('signup_confirmation_ip_address')->nullable();
            $table->ipAddress('signup_sm_ip_address')->nullable();
            $table->ipAddress('admin_ip_address')->nullable();
            $table->ipAddress('updated_ip_address')->nullable();
            $table->ipAddress('deleted_ip_address')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
