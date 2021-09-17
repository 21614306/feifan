<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthenticationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authentications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('type')->default('');
            $table->string('introduction')->default('');
            $table->string('article')->default('');
            $table->string('fields')->default('');
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
        Schema::dropIfExists('authentications');
    }
}
