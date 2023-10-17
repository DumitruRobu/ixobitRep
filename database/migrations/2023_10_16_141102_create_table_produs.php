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
        Schema::create('produs', function (Blueprint $table) {
            $table->id();
            $table->string("barcode");

            $table->unsignedBigInteger("idBrand");
            $table->index("idBrand", "produs_brand_idx");
            $table->foreign("idBrand", "produs_brand_fk")->on("brand")->references("id");

            $table->string("name");
            $table->string("price");
            $table->string("image");

            $table->unsignedBigInteger("id_params");
            $table->index("id_params", "produs_params_idx");
            $table->foreign("id_params", "produs_params_fk")->on("params")->references("id");

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produs');
    }
};
