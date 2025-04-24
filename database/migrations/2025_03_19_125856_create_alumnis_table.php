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
        Schema::create('alumnis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('role', 1)->index()->default('U');
            $table->string('username', 128);
            $table->string('password', 128);
            $table->string('retype_password', 128);
            $table->string('name', 255);
            $table->string('id_number', 128);
            $table->char('gender', 1)->index();
            $table->string('email', 128);
            $table->char('nationality', 3)->index();
            $table->string('phone', 128);
            $table->string('qualification', 128);
            $table->string('course', 128);
            $table->string('graduation_year', 128);
            $table->string('address1', 255);
            $table->string('address2', 255)->nullable();
            $table->string('city', 128);
            $table->string('postcode', 128);
            $table->char('country', 3)->index();
            $table->string('region', 128);
            $table->string('position', 255);
            $table->string('company_name', 255);
            $table->string('company_address1', 255);
            $table->string('company_address2', 255)->nullable();
            $table->string('company_city', 128);
            $table->string('company_postcode', 128);
            $table->char('company_country', 3)->index();
            $table->string('company_region', 128);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnis');
    }
};
