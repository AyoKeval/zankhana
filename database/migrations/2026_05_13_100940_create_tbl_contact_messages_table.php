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
        Schema::dropIfExists('tbl_contact_messages');
        Schema::create('tbl_contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email', 20);
            $table->string('phone', 15);
            $table->string('genre', 50);
            $table->string('interests', 500);
            $table->string('message', 1000);
            $table->timestamps();
            $table->string('ip_address', 40);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_contact_messages');
    }
};
