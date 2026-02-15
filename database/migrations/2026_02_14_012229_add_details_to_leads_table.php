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
        Schema::table('leads', function (Blueprint $table) {
            $table->string('budget')->nullable(); // Rango de presupuesto
            $table->json('project_type')->nullable(); // Checkboxes (servicios de interes)
            $table->string('contact_preference')->nullable(); // Email, Whatsapp, Phone
            $table->string('time_preference')->nullable(); // Mañana, Tarde, Noche
            $table->string('timezone')->nullable(); // Zona horaria
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropColumn(['budget', 'project_type', 'contact_preference', 'time_preference', 'timezone']);
        });
    }
};
