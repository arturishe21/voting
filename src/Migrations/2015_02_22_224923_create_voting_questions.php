<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotingQuestionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('voting_questions')) {
            Schema::create('voting_questions', function (Blueprint $table) {
                $table->engine = 'InnoDB';

                $table->increments('id');
                $table->string('title', 255);
                $table->string('picture', 255);
                $table->text('description');
                $table->tinyint('is_active');
                $table->datetime('date_start');
                $table->datetime('date_finish');
                $table->timestamps();
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
        Schema::dropIfExists('voting_questions');
    }

}
