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
        Schema::create('careerforms', function (Blueprint $table) {
            $table->id();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->string('city');
            $table->string('work_experience');
            $table->unsignedBigInteger('position_id');
            $table->string('linkedin');
            $table->string('cover_letter');
            $table->string('resume');
            $table->timestamps();
            $table->foreign('position_id')->references('id')->on('categories')->onDelete('cascade');
              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('careerforms');
    }
};
