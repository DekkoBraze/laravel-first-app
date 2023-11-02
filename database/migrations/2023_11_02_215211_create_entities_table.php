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
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('start_date')->nullable();
            $table->date('finish_date')->nullable();
            $table->integer('time')->nullable();
            $table->text('description')->nullable();
            $table->integer('score')->nullable();
            
            $table->unsignedBigInteger('category_id')->nullable();
            //$table->index('category_id', 'entity_category_idx');
            //$table->foreign('category_id', 'entity_category_fk')->on('categories')->references('id');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entities');
    }
};
