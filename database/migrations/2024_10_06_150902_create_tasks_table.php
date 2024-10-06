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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_category_id')->constrained('task_categories')->cascadeOnDelete();
            $table->boolean('status')->default(false);
            $table->string('title');
            $table->longText('description')->nullable();
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->dateTime('completed_time')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
