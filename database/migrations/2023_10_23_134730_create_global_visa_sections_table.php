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
        Schema::create('global_visa_sections', function (Blueprint $table) {
            $table->id();
            $table->string('global_visa_title')->nullable();
            $table->string('global_visa_desc')->nullable();
            $table->string('global_visa_status')->default('Show');

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
        Schema::dropIfExists('global_visas');
    }
};
