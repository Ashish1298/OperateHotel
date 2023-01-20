<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_type')->nullable();
            $table->foreign('service_type')->references('id')->on('service_categories');
            $table->unsignedBigInteger('room_id')->nullable();
            $table->foreign('room_id')->references('id')->on('rooms');
            $table->string('status')->default(0)->comment('0=inactive, 1=active');
            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
