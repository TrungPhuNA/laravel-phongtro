<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('pro_name')->nullable();
            $table->string('pro_slug')->nullable();
            $table->string('pro_hash_slug')->nullable();
            $table->string('pro_description',300)->nullable();
            $table->string('pro_address',300)->nullable();
            $table->integer('pro_category_id')->default(0);
            $table->float('pro_acreage')->default(0)->comment('dien tich');
            $table->date('pro_date_expiration')->nullable()->comment('ngay het han');
            $table->integer('pro_author_id')->default(0);
            $table->tinyInteger('pro_status')->default(1);
            $table->tinyInteger('pro_type')->default(1);
            $table->string('pro_avatar')->nullable();
            $table->longText('pro_map')->nullable();
            $table->integer('pro_price')->default(0)->comment('gia');
            $table->text('pro_content')->nullable();
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
        Schema::dropIfExists('products');
    }
}
