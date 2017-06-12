<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotingAnswersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('voting_answers')) {
            Schema::create('voting_answers', function (Blueprint $table) {
                $table->engine = 'InnoDB';

                $table->increments('id');
                $table->integer('voting_questions_id')->unsigned ();
                $table->string('title', 255);
                $table->integer('count_votes');

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
        Schema::dropIfExists('voting_answers');
    }

}
