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
        Schema::create('entity_tag', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('entity_id');
            $table->unsignedBigInteger('tag_id');

            //$table->index('entity_id', 'entity_tag_entity_idx');
            //$table->index('tag_id', 'entity_tag_tag_idx');

            //$table->foreign('entity_id', 'entity_tag_entity_fk')->on('entities')->references('id');
            //$table->foreign('tag_id', 'entity_tag_tag_fk')->on('tags')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entity_tags');
    }
};
