<?php namespace Vis\Voting;

use Illuminate\Database\Eloquent\Model;

class VotingQuestionsUser extends Model
{
    protected $table = 'voting_questions_user';
    public $timestamps = false;
    protected $guarded = [];

}