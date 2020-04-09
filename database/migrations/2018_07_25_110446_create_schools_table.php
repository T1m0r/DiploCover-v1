<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->string('schoolID')->primary();
            $table->string('schoolname');
            //$table->string('title')->nullable();
            //$table->string('name')->nullable();
            //$table->string('firstname');
            //$table->string('lastname');
            //table->string('phonenumber')->nullable();
            //$table->string('roleID');
            $table->string('teachID');
            $table->string('prfpic')->default('images/htltirol.png');
            //$table->string('email')->unique();
            $table->string('pswd');
            $table->string('confirmcode');
            $table->integer('status')->default('0');
            $table->string('schregistercode')->nullable();
            $table->string('contmail')->nullable();
            $table->rememberToken();
            $table->boolean('activated')->default(false);
            $table->string('token');
            $table->ipAddress('created_ip_address')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
