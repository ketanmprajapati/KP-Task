<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Labor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labor', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('contractor_id')->nullable();
            $table->string('labor_first_name')->nullable();
            $table->string('labor_last_name')->nullable();
            $table->string('labor_email')->nullable();
            $table->string('phone')->nullable();
            $table->string('labor_image')->nullable();
            $table->string('total_kharchee')->nullable();
            $table->string('pending_kharchee')->nullable();
            $table->string('aadhar_card_number')->nullable();
            $table->tinyInteger('is_active')->default(1)->comment("0=Not Active, 1=Active");
            $table->timestamps();

            // Foreign key
            $table->foreign('contractor_id')->references('id')->on('contractor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('labor');
    }
}
