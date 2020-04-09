<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->string('emplID')->primary();
            $table->string('title')->nullable();
            $table->string('job')->nullable();
            $table->string('jobdesc',1548)->nullable();
            $table->string('name');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('phonenumber')->nullable();
            $table->string('companyID')->nullable();
            $table->string('roleID')->default(1);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('confirmcode')->nullable();
            $table->integer('status')->default('0');
            $table->string('prfpic')->default('/images/avatar.png');
            $table->string('cregistercode')->nullable();
            $table->rememberToken();
            $table->boolean('activated')->default(false);
            $table->string('token')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
