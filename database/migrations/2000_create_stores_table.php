<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(
            'stores',
            function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('image')->nullable();
                $table->foreignId("country_id")->constrained('countries');
                $table->foreignId("governorate_id")->constrained('governorates');
                $table->string('place');
                $table->timestamps();
            },
        );
    }
    public function down(): void
    {
        Schema::dropIfExists('stores');
    }
};
