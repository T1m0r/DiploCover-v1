<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->string('companyID')->primary();
            $table->string('compname');
            $table->string('email')->unique();
            $table->string('emplID');
            $table->string('password')->nullable();
            $table->string('profpic')->default('/images/logo_sample.png');
            $table->string('brpic')->nullable();
            $table->string('prevtxt')->nullable();
            $table->string('website',522)->nullable();
            $table->string('contmail',225)->nullable();
            $table->rememberToken();
            $table->boolean('activated')->default(false);
            $table->ipAddress('last_ip_address')->nullable();
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
        Schema::dropIfExists('companies');
    }
}
