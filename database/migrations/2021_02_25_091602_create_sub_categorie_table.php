<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categorie', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('categorie_id');
            $table->string('name');
            $table->timestamps();

            // $table->index('user_id');
            // $table->foreign('user_id')->references('id')->on('user');

            // $table->index('categorie_id');
            // $table->foreign('categorie_id')->references('id')->on('categorie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub__categorie');
    }
}
