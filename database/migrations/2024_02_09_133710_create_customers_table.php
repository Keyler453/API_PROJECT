<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Cambiar 'nombre' a 'name'
            $table->string('curp');
            $table->timestamps();
        });

        Schema::create('company_customers', function (Blueprint $table) {
            $table->foreignId('company_id')->constrained();
            $table->foreignId('customer_id')->constrained();
            $table->primary(['company_id', 'customer_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('company_customers');
        Schema::dropIfExists('customers');
    }
}
