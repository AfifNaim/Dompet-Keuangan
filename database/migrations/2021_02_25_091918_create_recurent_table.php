<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecurentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recurent', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sub_categorie_id');
            $table->string('name');
            $table->integer('amount')->nullable();
            $table->time('start_date');
            $table->text('reminder');
            $table->time('repeat_every');
            $table->timestamps();

            // $table->index('user_id');
            // $table->foreign('user_id')->references('id')->on('user');

            // $table->index('sub_categorie_id');
            // $table->foreign('sub_categorie_id')->references('id')->on('sub_categorie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recurent');
    }
}
