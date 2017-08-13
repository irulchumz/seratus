<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableBrands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 255);
            $table->string('address', 255);
            $table->string('contact', 255);
            $table->string('city', 255)->nullable();
            $table->string('comment', 255)->nullable();
            $table->string('description', 255);
            $table->boolean('toko')->default(0);
            $table->boolean('brand')->default(0);
            $table->boolean('online')->default(0);
            $table->boolean('offline')->default(0);
            $table->boolean('local')->default(0);
            $table->boolean('international')->default(0);
            $table->string('operation_hour', 255)->nullable();
            $table->string('telphone_number', 255)->nullable();
            $table->string('email_sales', 255)->nullable();
            $table->string('email_media', 255)->nullable();
            $table->string('website', 255)->nullable();
            $table->string('tags', 255)->nullable();
            $table->string('category', 255)->nullable();
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('brands');
    }
}
