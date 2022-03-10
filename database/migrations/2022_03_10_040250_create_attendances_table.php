<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->string('roll_no');
            $table->integer('cst_301');
            $table->integer('cst_303');
            $table->integer('cst_305');
            $table->integer('cst_307');
            $table->integer('cst_309');
            $table->integer('mnc_301');
            $table->integer('cst_331');
            $table->integer('cst_333');
            $table->string('date',25);
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
        Schema::dropIfExists('attendances');
    }
}
