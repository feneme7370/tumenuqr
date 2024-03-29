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
        Schema::create('memberships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('price');
            $table->mediumText('short_description');
            $table->mediumText('description');
            $table->string('category');
            $table->string('level');
            $table->string('product');
            $table->string('user');
            $table->string('suggestion');
            $table->string('tag');
            $table->tinyInteger('list_product')->nullable()->default(1);
            $table->tinyInteger('status')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('memberships');
    }
};
