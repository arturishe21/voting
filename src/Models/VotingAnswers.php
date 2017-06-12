<?php namespace Vis\Voting;

use Illuminate\Database\Eloquent\Model;

class VotingAnswers extends Model
{
    protected $table = 'voting_answers';
    public $timestamps = false;

    protected $guarded = [];
     
    public function getPercent($sumCountVotes)
    {
        return round(($this->count_votes / $sumCountVotes) * 100);
    }
}