<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            
            // Relasi ke tabel users (opsional/nullable jika dikirim oleh tamu/guest)
            $table->foreignId('user_id')->nullable()->constrained('users')->nullOnDelete();
            
            // Detail Pengunjung
            $table->string('full_name');
            $table->string('phone');
            $table->string('email');
            
            // Detail Reservasi Showroom & Produk
            $table->string('watch_model');
            $table->string('showroom_location');
            $table->date('appointment_date');
            $table->string('appointment_time');
            $table->text('notes')->nullable();
            
            // Status Janji Temu
            $table->enum('status', ['Pending', 'Approved', 'Completed', 'Cancelled'])->default('Pending');
            
            $table->timestamps();

            // Index untuk mempercepat query pencarian data di Admin Dashboard
            $table->index(['status', 'showroom_location']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};