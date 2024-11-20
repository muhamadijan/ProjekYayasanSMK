<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavbarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navbar', function (Blueprint $table) {
            $table->id();
            $table->string('gambar1', 200)->default('default.png');
            $table->string('gambar2', 200)->default('default.png');
            $table->string('gambar3', 200)->default('default.png');
            $table->string('gambar4', 200)->default('default.png');
            $table->string('gambar5', 200)->default('default.png');
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
        Schema::dropIfExists('navbar');
    }
}
