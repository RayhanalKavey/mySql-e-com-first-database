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
        //
        Schema::table('products',function(Blueprint $table){
              // Drop foreign keys if they depend on unique constraints
            $table->dropForeign(['category_id']);
            $table->dropForeign(['brand_id']);

            // Drop unique constraints
            $table->dropUnique('products_category_id_unique');
            $table->dropUnique('products_brand_id_unique');

            // Re-add foreign keys without requiring unique constraints (if needed)
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products',function(Blueprint $table){
           // Remove foreign keys again
            $table->dropForeign(['category_id']);
            $table->dropForeign(['brand_id']);

            // Re-add unique constraints
            $table->unique('category_id', 'products_category_id_unique');
            $table->unique('brand_id', 'products_brand_id_unique');

            // Re-add foreign keys that depend on unique constraints
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        });
    }
};
