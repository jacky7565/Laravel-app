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
        Schema::table('contacts',function(Blueprint $table){

            $table->string('password');
            $table->string('image');

            $table->dropColumn(['number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::table('contacts',function(Blueprint $table){
        $table->dropColumn(['password','image']);
        $table->string('number')->nullable();
      });
    }
};
