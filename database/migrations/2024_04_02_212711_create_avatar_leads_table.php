<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvatarLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avatar_leads', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('agent_id');
            $table->string('agent_name');
            $table->boolean('smoker')->default(false);
            $table->integer('age');
            $table->string('verifier_name');
            $table->string('dailer_no');
            $table->string('center');

            // Foreign key constraint for agent_id
            $table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');

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
        Schema::dropIfExists('avatar_leads');
    }
}
