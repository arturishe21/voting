<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotingQuestionUserTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('voting_questions_user')) {
            Schema::create('voting_questions_user', function (Blueprint $table) {
                $table->engine = 'InnoDB';

                $table->increments('id');
                $table->integer('voting_questions_id')->unsigned ();
                $table->string('ip', 20);

                $table->index ('voting_questions_id');
                $table->foreign ('voting_questions_id')->references ('id')
                    ->on ('voting_questions')->onDelete ('cascade');
            });


        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('voting_questions_user');
    }

}
