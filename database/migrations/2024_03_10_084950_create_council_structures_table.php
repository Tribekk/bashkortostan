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
        Schema::create('council_structures', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('FIO');
            $table->string('phone');
            $table->string('mail');
            $table->string('subdivision');
            $table->string('job_title');
            $table->string('information');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('council_structures');
    }
};
