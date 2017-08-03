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
            $table->string('description', 255);
            $table->string('toko', 255);
            $table->string('brand', 255);
            $table->string('online', 255);
            $table->string('offline', 255);
            $table->string('local', 255);
            $table->string('international', 255);
            $table->string('city', 255);
            $table->string('operation_hour', 255);
            $table->string('telphone_number', 255);
            $table->string('email_sales', 255);
            $table->string('email_media', 255);
            $table->string('website', 255);
            $table->string('tags', 255);
            $table->string('photo_showroom', 255);
            $table->string('photo_product_still_life', 255);
            $table->string('photo_product_white_background', 255);
            $table->string('3d_model', 255);
            $table->string('featured_100plus', 255);
            $table->string('link_photo_folder', 255);
            $table->string('category', 255);
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
