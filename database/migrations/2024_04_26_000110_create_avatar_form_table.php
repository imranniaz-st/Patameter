<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvatarFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avatar_form', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lead_id');
            $table->unsignedBigInteger('list_id');
            $table->string('phone_number');
            $table->string('campaign');
            $table->string('closer');
            $table->string('group_a');
            $table->string('server_ip');
            $table->string('dispo');
            $table->string('agent_name');
            $table->string('recording_filename');
            $table->unsignedBigInteger('recording_id');
            $table->text('recording_link')->nullable();
            $table->unsignedBigInteger('entry_list_id');
            $table->string('user_group');
            $table->string('list_name');
            $table->string('list_description');
            $table->date('entry_date');
            $table->string('closer_name');
            $table->string('smoker')->nullable();
            $table->integer('age')->nullable();
            $table->string('dialername')->nullable();
            $table->string('centername')->nullable();
            $table->string('xferSubmission')->nullable();
            $table->timestamps(); // This will create the `created_at` and `updated_at` columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('avatar_form', function (Blueprint $table) {
            $table->renameColumn('group_a', 'GROUP');
        });
    }
}
