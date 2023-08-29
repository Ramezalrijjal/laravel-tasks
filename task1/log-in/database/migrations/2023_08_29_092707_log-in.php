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
        
    
   
   
        Schema::create('log-in', function (Blueprint $table) 
        {
                $table->id();
                $table->string('user-name');
                $table->string('password');
                
                
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log-in');
    }
};
