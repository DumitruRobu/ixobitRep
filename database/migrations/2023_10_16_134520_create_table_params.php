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
        Schema::create('params', function (Blueprint $table) {
            $table->id();
            $table->string("memory");
            $table->string("display");
            $table->string("ram");
            $table->string("battery");
            $table->string("model");
            $table->string("sim");
            $table->string("refreshRate");
            $table->string("color");
            $table->string("processor");
            $table->string("connection");
            $table->string("displayType");
            $table->string("nfc");
            $table->string("processorModel");
            $table->boolean("isRecommended");

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('params');
    }
};
