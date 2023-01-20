<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\RoomCategory;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_name');
            $table->string('image');
            $table->unsignedBigInteger('category')->nullable();
            $table->foreign('category')->references('id')->on('room_categories');
            $table->double('price');
            $table->text('description');
            $table->string('status')->default(0)->comment('0=inactive, 1=active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
