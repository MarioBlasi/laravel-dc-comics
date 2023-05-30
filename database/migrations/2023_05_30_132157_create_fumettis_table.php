<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fumettis', function (Blueprint $table) {
            $table->id();
            $table->string('title',200);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->float('price', unsigned:true)->nullable();
            $table->date('sale_date')->nullable();
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
        Schema::dropIfExists('fumettis');
    }
};
