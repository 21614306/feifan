<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('')->comment('公司名称');
            $table->string('tel')->default('');
            $table->string('add')->default('');
            $table->string('article_id')->default('');
            $table->string('website')->default('')->comment('公司网址');
            $table->string('qq')->default('');
            $table->string('qrcode')->default('');
            $table->string('field1')->default('');
            $table->string('field2')->default('');
            $table->string('field3')->default('');
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
        Schema::dropIfExists('companys');
    }
}
