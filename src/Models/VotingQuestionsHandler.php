<?php namespace Vis\Voting;

use Vis\Builder\Handlers\CustomHandler;

class VotingQuestionsHandler extends CustomHandler
{
    /*
     * show field in popup
     */
    public function onGetEditInput($formField, array &$row)
    {
        if ($formField->getFieldName() == 'answers') {

            if (isset($row['id'])) {
                $question = VotingQuestions::find($row['id']);
                $answers = $question->answers;
            }

            return view("voting::cms.voting_answers", compact('answers'));
        }
    }

    public function onAddSelectField($formField, $row)
    {
        if ($formField->getFieldName() == "answers") {
            return true;
        }
    }

    public function onUpdateRowData(array &$value, $row)
    {
        if (isset($row['id']) && isset($value['answers']) && isset($value['count_voting'])) {

            foreach ($value['answers'] as $idAnswer => $answerTitle) {
                if ($idAnswer == 'new') {

                    foreach ($answerTitle as $title) {
                        if ($title) {
                            VotingAnswers::insert([
                                'voting_questions_id' => $row['id'],
                                'title' => $title
                            ]);
                        }
                    }

                } else {
                    VotingAnswers::where('id', $idAnswer)
                        ->update([
                            'voting_questions_id' => $row['id'],
                            'title' => $answerTitle
                        ]);
                }

            }

            unset($value['answers']);
            unset($value['count_voting']);
        }
    }

    public function onInsertRowData(array &$value)
    {
        unset($value['answers']);
        unset($value['count_voting']);
    }

}