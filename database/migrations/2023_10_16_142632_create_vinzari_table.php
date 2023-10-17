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
        Schema::create('vinzari', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("id_client");
            $table->index("id_client", "vinzari_client_idx");
            $table->foreign("id_client", "vinzari_client_fk")->on("client")->references("id");

            $table->unsignedBigInteger("id_produs");
            $table->index("id_produs", "vinzari_produs_idx");
            $table->foreign("id_produs", "vinzari_produs_fk")->on("produs")->references("id");

            $table->string("data_cumpararii");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vinzari');
    }
};
