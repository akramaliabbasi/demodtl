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
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
		//	$table->foreignId('user_id')->constrained()->onDelete('cascade');
			$table->string('name');
			$table->decimal('price', 10, 2);
			$table->enum('status', ['active', 'inactive'])->default('active');
			$table->unsignedBigInteger('user_id'); // Added by
			$table->enum('type', ['item', 'service']);
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users');
			
			// indexing for search 
			$table->index('user_id');
			$table->index('name');
        });
		
		
		
		
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
		Schema::table('products', function (Blueprint $table) {
			$table->dropIndex(['user_id']);
			$table->dropIndex(['name']);
		});
		
        Schema::dropIfExists('products');
    }
};
