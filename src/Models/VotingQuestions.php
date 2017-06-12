<?php namespace Vis\Voting;

use Illuminate\Database\Eloquent\Model;

class VotingQuestions extends Model
{
    protected $table = 'voting_questions';

    protected $with = 'answers';

    public function answers()
    {
        return $this->hasMany('Vis\Voting\VotingAnswers');
    }

    public function voted()
    {
        return $this->hasMany('Vis\Voting\VotingQuestionsUser')->where('ip', 'like', getIp());
    }

    protected $guarded = [];

    public function showVoting()
    {
        $answers = $this->answers;
        $sumCountVotes = $this->answers()->sum('count_votes');

        if ($this->checkUserVoted()) {
            return view('voting::result_voting', compact('answers', 'sumCountVotes'));
        } else {
            return view('voting::form_for_voting', compact('answers', 'sumCountVotes'));
        }
    }

    private function checkUserVoted()
    {
        return $this->voted()->count();
    }

}