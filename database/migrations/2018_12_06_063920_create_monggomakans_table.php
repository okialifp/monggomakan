<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonggomakansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monggomakans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namamakanan');
            $table->string('harga');
            $table->string('jumlah');
            $table->string('jenismakanan');
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
        Schema::dropIfExists('monggomakans');
    }
}
