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
        Schema::create('last_sheet_synckings', function (Blueprint $table) {
            $table->id();
            $table->string('table_name');
            $table->string('slug');
            $table->dateTime('last_sync_time')->nullable();
            $table->datetime('last_upload_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('last_sheet_synckings');
    }
};
