<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notif', function (Blueprint $table) {
            //the coloumn of the table and the data type of the fill
            $table->bigIncrements('id');
            $table->integer('from', FALSE, TRUE);
            $table->integer('to', FALSE, TRUE);
            $table->text('message');
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
        Schema::dropIfExists('notif');
    }
}
