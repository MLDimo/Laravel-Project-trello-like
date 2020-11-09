<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('table_id')->unsigned();
            $table->string('title');
            // $table->foreign('table_id')->references('id')->on('tables')->onDelete('cascade');

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
        Schema::dropIfExists('listes');
    }
}
