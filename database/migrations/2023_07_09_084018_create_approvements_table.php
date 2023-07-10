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
        Schema::create('approvements', function (Blueprint $table) {
            $table->id();
            $table->integer('task_id');
            $table->integer('approved_by_id');
            $table->integer('step');
            $table->string('status', 100);
            $table->text('notes',300);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approvements');
    }
};
