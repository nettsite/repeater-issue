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
        Schema::create('requisitions', function (Blueprint $table) {

            $table->string('requisition_number', 20)->unique();
            $table->dateTime('collected_at');

            // $table->foreignUuid('doctor_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
            // $table->foreignUuid('patient_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
            // $table->uuid('guarantor_id')->nullable();

            // $table->string('diagnostic_code', 16)->nullable();
            // $table->boolean('is_urgent')->default(false);
            // $table->boolean('hospital_case')->default(false);
            // $table->boolean('after_hours')->default(false);
            // $table->boolean('email_medical_aid')->default(false);
            // $table->boolean('email_doctor')->default(false);
            // $table->boolean('fax_doctor')->default(false);
            // $table->boolean('phone_results')->default(false);
            // $table->boolean('sms_results')->default(false);

            // $table->foreignUuid('laboratory_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();

            // $table->text('doctor_notes')->nullable();

            // $table->string('medical_aid_authorisation_number', 20)->nullable();

            // $table->boolean('cash_received')->default(false);

            // $table->text('patient_notes')->nullable();

            // $table->string('other_laboratory')->nullable();
            // $table->string('other_laboratory_number')->nullable();

            // $table->string('tests_requested')->nullable();
            // $table->unsignedSmallInteger('number_of_samples')->nullable();
            // $table->unsignedSmallInteger('number_of_tests')->nullable();
            // $table->unsignedSmallInteger('percent_complete')->nullable();

            $table->uuid('id')->primary();
            $table->timestamps();
            $table->softDeletes();
            $table->bigInteger('pk')->nullable()->unique();

            // $table->foreign('guarantor_id')
            //     ->references('id')
            //     ->on('patients')
            //     ->constrained()
            //     ->cascadeOnUpdate()
            //     ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requisitions');
    }
};
