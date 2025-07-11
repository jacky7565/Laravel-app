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
        Schema::create('contacts',function(Blueprint $table){
            $table->integer('id')->primary()->autoIncrement();
            $table->string('name');
            $table->string('email');
            $table->string('number')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    Schema::dropIfExists('contacts');

    }
};
