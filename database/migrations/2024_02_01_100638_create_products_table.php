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
            $table->unsignedBigInteger('category_id');
            $table->string('name');
            $table->string('slug');
            $table->string('brand')->nullable;
            $table->text('description');
            $table->integer('original_price');
            $table->integer('selling_price');
            $table->integer('quantity');
            $table->tinyInteger('trending')->default('0')->comment('1 =trending, 0=tidak trending');
            $table->tinyInteger('status')->default('0')->comment('1 =tidak aktif, 0=aktif');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
