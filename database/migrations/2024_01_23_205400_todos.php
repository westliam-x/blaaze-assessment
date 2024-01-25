<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up():void
    {
       
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('message');
            $table->boolean('isCompleted')-> default(0);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};