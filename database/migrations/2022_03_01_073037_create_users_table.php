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
            $table->id();
            $table->string("user_name",225);
            $table->string("roll_no",25);
            $table->string("email",225);
            $table->string("sem",25);
            $table->string("touter",225);
            $table->string("addmisson_no",25);
            $table->string("address",400);
            $table->string("blood",225);
            $table->string("gender",225);
            $table->string("password",225);
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
