<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stud_profiles', function (Blueprint $table) {
            $table->string('sID')->primary();
            $table->string('laston')->nullable();
            $table->string('aboutme',1500)->nullable();
            $table->string('intressts',300)->nullable();
            $table->string('Stschool')->nullable();
            $table->string('Contact')->nullable();
            $table->string('profpic',200)->default('/images/avatar.png');
            $table->string('lebpath',200)->nullable();
            $table->string('zeugpath',200)->nullable();
            $table->string('otherpath1',200)->nullable();
            $table->string('otherpath2',200)->nullable();
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
        Schema::dropIfExists('stud_profiles');
    }
}
