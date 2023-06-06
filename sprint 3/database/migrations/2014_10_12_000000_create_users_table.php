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
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('name', 200);
            $table->string('username', 100)->unique();
            $table->string('alamat');
            $table->string('email', 100)->unique();
            $table->string('no_hp', 15);
            $table->string('password');
            $table->enum('role', ['pelanggan', 'peternak', 'dokter', 'admin']);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
