<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('shot_des',length:50);
            $table->string('title',length:50);
            $table->string('price',length:50);
            $table->boolean('discount');
            $table->string('discount_price',length:50);
            $table->string('img',length:50);
            $table->boolean('stack');
            $table->float('star');
            // $table->double('star');
            $table->enum('remark',['popular','new','top','special','trending','regular']);

            $table->unsignedBigInteger('category_id')->unique();
            $table->unsignedBigInteger('brand_id')->unique();

            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnUpdate()->restrictOnDelete();
            $table->foreign('brand_id')->references('id')->on('brands')->cascadeOnUpdate()->restrictOnDelete();

            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
