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
            $table->foreignId('category_id')->default(0)->constrained();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('file_path')->nullable();
            $table->decimal('price')->nullable();
            $table->decimal('impuesto')->nullable();
            $table->decimal('descuento')->nullable();
            $table->integer('stock')->nullable();
            $table->boolean('disponible')->default(1);
            $table->decimal('sold')->nullable()->default('0');
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
