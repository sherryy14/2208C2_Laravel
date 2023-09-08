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
        Schema::create('register', function (Blueprint $table) {
            $table->id('reg_id'); // primary key, autoincr -> column name = id
            $table->string('name',50); // varchar -> column name = name -> length = 50
            $table->string('username',50);
          //  ->nullable();  agr user input na kry to NULL value jaygi 
            $table->string('city',20)->default('No City');
            $table->string('email',50)->nullable();
            $table->string('password',100);
            $table->timestamps(); // created_at updated_at
            $table->softDeletes(); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register');
    }
};
