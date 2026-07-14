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
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('major_id')->constrained()->onDelete('cascade');
            $table->string('nim', 10); // 26.07.11.1.001 : tahun, prodi, fakultas, semester, nomor urut
            $table->string('email', 50);
            $table->string('name', 50);
            $table->string('phone', 15);
            $table->string('place_of_birth', 20)->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['laki_laki', 'perempuan']);
            $table->text('address');
            $table->string('academic_year', 4);
            $table->string('term', 1); // 1 = Ganjil, 2 = Genap
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
