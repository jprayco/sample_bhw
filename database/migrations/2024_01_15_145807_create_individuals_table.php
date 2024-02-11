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
        Schema::create('individuals', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('bday');
            $table->string('contact_no');
            $table->string('gender');
            $table->foreignId('civil_status_id')->constrained('civil_statuses');
            $table->foreignId('pwd_categories_id')->constrained('pwd_categories');
            $table->foreignId('lgbt_category_id')->constrained('lgbt_categories');
            $table->foreignId('address_id')->constrained('addresses');
            $table->string('family_code');
            $table->integer('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('individuals');
    }
};
