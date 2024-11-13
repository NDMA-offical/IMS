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
        Schema::create('itemreturns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained('items');
			$table->integer('returned_by');
			$table->integer('received_by');
			$table->foreignId('condition_id')->constrained('conditions');
			$table->integer('quantity_returned');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itemreturns');
    }
};
