<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('avatar_leads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agent_id');
            $table->string('lead_id');
            $table->string('dialer_id');
            $table->string('AGE');
            $table->string('Smoker');
            $table->string('verifier');
            $table->string('center');
            $table->string('phone_number');
            $table->string('link');
            $table->timestamps();

            // Foreign key constraints
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avatar_leads');
    }
};
