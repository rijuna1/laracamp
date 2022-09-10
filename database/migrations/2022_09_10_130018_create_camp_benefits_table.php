<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            // --1st method
            // $table->bigInteger('camp_id')->unsigned();
            // -- atau
            // $table->unsignedBigInteger('camp_id');
            // -- 2nd method
            $table->foreignId('camp_id')->constrained();
            $table->string('name', 50);
            $table->timestamps();
            $table->softDeletes();

            // -- 1st mehod
            // $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
};
