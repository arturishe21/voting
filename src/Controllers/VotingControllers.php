<?php namespace Vis\Voting;

use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;

class VotingControllers extends Controller
{
    public function doDeleteAnswer(VotingAnswers $votingAnswers, $id)
    {

        $votingAnswers->find($id)->delete();
     
        return Response::json (
            array (
                'status' => 'success',
            )
        );
    }
}
