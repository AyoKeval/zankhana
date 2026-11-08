<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_editorial_board', function (Blueprint $table) {
            $table->id();

            $table->string('name', 40);
            $table->enum('board_type', ['editorial', 'overseas', 'advisory', 'review', 'other'])->default('other');
            $table->string('designation', 40);
            $table->string('institution', 100);
            $table->string('university', 100)->nullable();
            $table->string('expertise', 80)->nullable();
            $table->string('email', 40)->nullable();
            $table->string('address', 200)->nullable();

            $table->string('google_scholar', 400)->nullable();
            $table->string('researchgate', 100)->nullable();
            $table->string('scopus_id', 40)->nullable();
            $table->string('other', 400)->nullable();

            $table->boolean('is_active')->default(1);
            $table->boolean('is_del')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_editorial_board');
    }
};
