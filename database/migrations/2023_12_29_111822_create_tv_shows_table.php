<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tv_shows', function (Blueprint $table) {
            $table->id();
            $table->string('image_url');
            $table->string('title');
            $table->unsignedBigInteger('genre_id')->nullable();
            $table->text('description')->nullable();
            $table->decimal('rating', 3, 1)->default(0.0);
            $table->integer('release_year');
            $table->integer('episode_count');
            $table->tinyInteger('soft_delete')->default(0);
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tv_shows');
    }
};
