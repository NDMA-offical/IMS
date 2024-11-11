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
        Schema::create('issues', function (Blueprint $table) {
            $table->id();
            $table->foreignId('item_id')->constrained('items')->restrictOnUpdate()->restrictOnDelete();
			$table->text('issue_to_name', 25);
			$table->text('issue_by', 25);
			$table->date('issue_date');
			$table->text('voucher_no', 25);
			$table->text('remarks', 25);
			$table->enum('issue_status', ['one', 'two']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('issues');
    }
};
