<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id'); // bigInteger, primary key
            $table->string('fullname'); // Varchar, Họ tên
            $table->string('username')->unique(); // Varchar, Tên tài khoản, duy nhất
            $table->string('email')->unique(); // Varchar, Email, duy nhất
            $table->string('password'); // Varchar, Mật khẩu
            $table->string('avatar')->nullable(); // Varchar, null, Ảnh đại diện
            $table->enum('role', ['admin', 'user'])->default('user'); // Vai trò, mặc định là 'user'
            $table->boolean('active')->default(true); // Hoạt động của tài khoản, mặc định là 1
            $table->timestamps(); // Tạo các trường created_at và updated_at
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
