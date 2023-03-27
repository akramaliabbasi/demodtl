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
        Schema::create('audits', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('auditable_id');
        $table->string('auditable_type');
        $table->unsignedBigInteger('user_id')->nullable();
        $table->string('user_type')->nullable();
        $table->json('old_values')->nullable();
        $table->json('new_values')->nullable();
        $table->string('event');
        $table->json('tags')->nullable();
        $table->string('ip_address')->nullable();
        $table->string('user_agent')->nullable();
        $table->string('url')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('audits', function (Blueprint $table) {
            //
        });
    }
};
