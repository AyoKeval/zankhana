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
        Schema::dropIfExists('tbl_books');
        Schema::create('tbl_books', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('is_active')->default(1)->comment('1=active, 0=inactive');
            $table->string('title', 100)->unique();
            $table->string('author', 100);
            $table->string('category', 100);
            $table->string('pdf_file', 150);
            $table->integer('sell_count')->default(0);
            $table->tinyInteger('is_del')->default(0)->comment('0=not_del, 1=del');
            $table->timestamps();
            $table->string('ip_address', 40);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_books');
    }
};
