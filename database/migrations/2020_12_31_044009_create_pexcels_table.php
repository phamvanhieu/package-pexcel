<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePexcelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pexcels', function (Blueprint $table) {
            $table->id('pexcel_id');
            $table->integer('user_id');
            $table->string('user_email');
            $table->string('user_full_name');
            $table->integer('category_id');
            $table->string('pexcel_name');
            $table->string('pexcel_overview');
            $table->text('pexcel_description');
            $table->string('pexcel_slug');
            $table->string('pexcel_image');
            $table->string('pexcel_files');
            $table->integer('pexcel_status');
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
        Schema::dropIfExists('pexcels');
    }
}
