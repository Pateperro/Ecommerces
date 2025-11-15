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
            $table->string('name');
            $table->decimal('price');
            $table->text('description');
            $table->string('url_image');
            $table->timestamps();



            $table->foreignId('categories_id')->references('id')->on('categories');


            $table->foreignId('brand_id')->references('id')->on('brand'); /* Forma rapida de crear la conexion ahorando la linea de usingnedBigIntenger   */
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
