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
        Schema::create('services', function (Blueprint $table) {
            $table->id(); 
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('location');
            $table->decimal('price', 10, 2);
            $table->string('image')->nullable();
            $table->decimal('rating', 3, 2)->default(0);
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('mitra_id')->constrained('users')->onDelete('cascade'); // jika mitra juga user
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
