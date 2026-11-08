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
        Schema::table('tbl_users', function (Blueprint $table) {
            $table->enum('role', ['sadmin', 'admin', 'manager', 'user'])->default('user')->after('password');
            $table->json('permission')->nullable()->after('role');

            $table->boolean('is_active')->default(true)->after('permission');
            $table->boolean('is_del')->default(false)->after('is_active');
        });
    }

    public function down(): void
    {
        Schema::table('tbl_users', function (Blueprint $table) {
            $table->dropColumn([
                'role',
                'permission',
                'is_active',
                'is_del'
            ]);
        });
    }
};
