<?php

namespace App\Model;

class ResultManager extends AbstractManager
{
    public const TABLE = 'answer';

    public function fetchValuesByAnswer(array $results): array
    {
        // fetching all data from database
        $answerValues = $this->selectAll();

        // initializing values array
        $values = [];

        // returning values corresponding to selected answers from the array we got from database
        foreach ($results as $result) {
            foreach ($answerValues as $answerValue) {
                if ($result == $answerValue["label"]) {
                    array_push($values, $answerValue["answer_value"]);
                }
            }
        }
        return $values;
    }
}
