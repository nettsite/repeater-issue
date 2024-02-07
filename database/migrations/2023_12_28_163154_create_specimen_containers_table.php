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
        Schema::create('specimen_containers', function (Blueprint $table) {

            $table->string('description',64)->unique();
            $table->string('type',32)->index();
            $table->string('colour',16)->nullable()->index();
            $table->bigInteger('pk')->unique('pk')->nullable();
            
            $table->uuid('id')->primary();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specimen_containers');
    }
};
