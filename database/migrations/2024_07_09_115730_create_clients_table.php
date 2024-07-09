<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama client (perusahaan)
            $table->string('email')->unique(); // Email client (perusahaan)
            $table->text('manage_scope')->nullable(); // Deskripsi Manage Scope
            $table->string('contact_name')->nullable(); // Nama PIC
            $table->string('contact_email')->nullable(); // Email PIC
            $table->string('contact_phone')->nullable(); // Nomor HP PIC
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
