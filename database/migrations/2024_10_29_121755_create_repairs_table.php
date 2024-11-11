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
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->text('request_by', 25);
			$table->date('request_date');
			$table->text('request_sheet_id', 25);
			$table->text('repair_cost', 25);
			$table->date('repair_date');
			$table->enum('repair_status', ['opt1', 'opt2']);
			$table->foreignId('fundingsource_id')->constrained('fundingsources')->restrictOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repairs');
    }
};
