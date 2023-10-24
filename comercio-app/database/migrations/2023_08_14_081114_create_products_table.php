<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
       // $table->string("ecat_id");   
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string("tcat_id");
            $table->string("mcat_id");
            $table->string("p_name");
            $table->integer("p_old_price");
            $table->integer("p_current_price");
            $table->integer("p_qty");
            $table->mediumText("size");
            $table->mediumText("color");
            $table->string("p_featured_photo");
            $table->mediumText("photo");
            $table->mediumText("p_description");
            $table->mediumText("p_short_description");
            $table->mediumText("p_feature");
            $table->mediumText("p_condition");
            $table->mediumText("p_return_policy");
            $table->integer("p_is_featured");
            $table->integer("p_is_active");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
