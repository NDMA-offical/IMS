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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->text('item_code', 25);
			$table->text('item_name', 25);
			$table->text('item_model_no', 25);
			$table->text('item_desp', 250);
			$table->foreignId('brand_id')->constrained('brands')->restrictOnUpdate()->restrictOnDelete();
			$table->foreignId('category_id')->constrained('categories')->restrictOnUpdate()->restrictOnDelete();
			$table->foreignId('project_id')->constrained('projects')->restrictOnUpdate()->restrictOnDelete();
			$table->foreignId('fundingsource_id')->constrained('fundingsources')->restrictOnUpdate()->restrictOnDelete();
			$table->text('item_status', 25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
