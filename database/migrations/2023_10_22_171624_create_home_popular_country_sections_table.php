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
        Schema::create('home_popular_country_sections', function (Blueprint $table) {
            $table->id();
            $table->string('populartitle')->nullable();
            $table->string('populardesc')->nullable();
            $table->string('popularstatus')->default('Show');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_popular_country_sections');
    }
};
