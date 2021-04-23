<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Timesheet extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('timesheets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('uid');
            $table->string('staffname');
            $table->string('stafftask');
            $table->string('taskdate');
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
        //
        Schema::dropIfExists('timesheets');
    }
}
