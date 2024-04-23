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
                $table->unsignedBigInteger('lead_id')->nullable();
                $table->unsignedBigInteger('list_id')->nullable();
                $table->string('phone_number')->nullable();
                $table->integer('campaign')->nullable();
                $table->string('closer')->nullable();
                $table->string('group_a')->nullable();
                $table->string('server_ip')->nullable();
                $table->string('dispo')->nullable();
                $table->string('recording_filename')->nullable();
                $table->unsignedBigInteger('recording_id')->nullable();
                $table->string('recording_link')->nullable();
                $table->unsignedBigInteger('entry_list_id')->nullable();
                $table->string('user_group')->nullable();
                $table->string('list_name')->nullable();
                $table->string('list_description')->nullable();
                $table->string('entry_date')->nullable();
                $table->string('closer_name')->nullable();
                $table->string('dialername')->nullable();
                $table->string('centername')->nullable();
                $table->timestamp('xferSubmission')->nullable();

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
