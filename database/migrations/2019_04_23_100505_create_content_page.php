<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content_page', function (Blueprint $table) {
            $table->increments('id');
            $table->text('assets')->nullable();
            $table->text('css')->nullable();
            $table->text('styles')->nullable();
            $table->text('html')->nullable();
            $table->text('components')->nullable();
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
        Schema::dropIfExists('content_page');
    }
}
