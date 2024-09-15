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
        Schema::create('visa_pass_sections', function (Blueprint $table) {
            $table->id();
            $table->string('visapasstitle')->nullable();
            $table->string('visapassdescription')->nullable();
            $table->string('visapassstatus')->default('Show');
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
        Schema::dropIfExists('visa_pass_sections');
        
    }
};
