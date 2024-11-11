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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->text('employee_name', 25);
			$table->text('employee_cnic', 25);
			$table->text('employee_email', 40);
			$table->text('employee_contact', 40);
			$table->foreignId('wing_id')->constrained('wings');
			$table->foreignId('designation_id')->constrained('designations');
			$table->enum('user_status', ['Active', 'Inactive']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
