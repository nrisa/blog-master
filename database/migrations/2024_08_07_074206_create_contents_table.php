<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug');
            $table->unsignedBigInteger('category_id'); // Menambahkan relasi ke tabel categories
            $table->text('isi');
            $table->string('foto')->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('row_status')->default(1);
            $table->timestamps();
            $table->string('created_by')->nullable();
            $table->string('hari')->nullable();
            $table->string('jam')->nullable();

            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('contents');
    }
}

