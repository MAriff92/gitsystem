<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDailyregTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dailyreg', function (Blueprint $table) {
            $table->id();
            $table->string('uname');
            $table->float('utemp');
            $table->string('ucheck');
            $table->string('ucomp');
            $table->string('utype');
            $table->string('ufever');
            $table->string('ucough');
            $table->string('ukey');
            $table->string('utime');
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
        Schema::dropIfExists('dailyreg');
    }
}
