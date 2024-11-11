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
        Schema::create('fundingsources', function (Blueprint $table) {
            $table->id();
            $table->text('source_name', 25);
			$table->text('source_desp', 250)->nullable();
			$table->boolean('source_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fundingsources');
    }
};
