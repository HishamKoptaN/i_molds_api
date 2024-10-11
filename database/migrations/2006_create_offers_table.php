<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create(
            'offers',
            function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('status')->default('active')->comment('active - inactive');
                $table->foreignId("store_id")->constrained('stores');
                $table->foreignId("category_id")->constrained('categories');
                $table->text('description');
                $table->string('image')->nullable();
                $table->timestamp("end_at")->nullable();
                $table->timestamps();
            },
        );
    }
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
