<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 190);
            $table->string('image', 191)->nullable();
            $table->text('text')->nullable();
            $table->string('slug', 191)->nullable();
            $table->unsignedBigInteger('category_id')->default(1);
            $table->foreign('category_id')->references('id')->on('categories');
            $table->unsignedBigInteger('source_id')->default(1);
            $table->foreign('source_id')->references('id')->on('sources');
            $table->timestamps();

           // $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
        });
    }

    public function down()
    {
        Schema::dropIfExists('news');
    }
}
