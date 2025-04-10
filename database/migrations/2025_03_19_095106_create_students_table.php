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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nrp',9)->unique();
            $table->date('birth_date');
            $table->string('place_of_birth');
            $table->text('address')->nullable();
            $table->string('phone_number',15)->nullable();
            $table->boolean('is_active')->default(true);
            $table->string('nik',16)->unique();
            $table->foreignId('unit_id')->constrained('units');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
