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
        Schema::create('lecturers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('major_id')->constrained()->onDelete('cascade');
            $table->string('nidn', 10);
            $table->string('email', 100)->nullable();
            $table->string('name', 50);
            $table->string('phone', 15)->nullable();
            $table->string('place_of_birth', 20)->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender', ['laki_laki', 'perempuan']);
            $table->text('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lecturers');
    }
};
