<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();   
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');          
            $table->foreignId('bank_id')->constrained('currencies')->onDelete('cascade');
            $table->string('account_number')->nullable();
            $table->string('comment');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
