<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDAsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_as', function (Blueprint $table) {
            $table->string('DAid')->primary();
            $table->string('DAname');
            $table->string('DAdesc',4824);
            $table->string('companyID')->nullable();
            $table->string('schoolID')->nullable();
            $table->string('teamID')->nullable();
            $table->string('sID')->nullable();
            $table->string('teachID')->nullable();
            $table->string('emplID')->nullable();
            $table->string('emplIDz')->nullable();
            $table->string('prog');
            $table->string('size',124)->nullable();
            $table->string('privacy',124)->default(1);
            $table->string('phase',124)->default(1);
            $table->string('status');
            $table->integer('optfield')->default(0);
            $table->string('optfieldtitle')->nullable();
            $table->rememberToken();
            $table->boolean('activated')->default(false);
            $table->string('token');
            $table->ipAddress('create_ip_address')->nullable();
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
        Schema::dropIfExists('d_as');
    }
}
