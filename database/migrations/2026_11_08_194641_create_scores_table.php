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
    Schema::create('scores', function (Blueprint $table) {
        $table->id();
        $table->foreignId('student_id')->constrained()->onDelete('cascade');
        $table->string('mapel');
        $table->decimal('nilai_tugas', 5, 2)->default(0);
        $table->decimal('nilai_uts', 5, 2)->default(0);
        $table->decimal('nilai_uas', 5, 2)->default(0);
        $table->decimal('nilai_akhir', 5, 2)->default(0);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scores');
    }
};
