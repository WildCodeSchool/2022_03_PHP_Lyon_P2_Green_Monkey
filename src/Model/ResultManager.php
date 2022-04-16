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

    public function calculateTotalFootprint(array $values): float
    {
        // a simple sum of all values we got in the fetchValuesByAnswer function
        return $totalFootprint = array_sum($values);
    }

    public function calculateFootprintByCat(array $values): array
    {
        // dividing the values array in smaller arrays (4)
        $slicedResults = array_chunk($values, 4, false);

        // initializing footprintByCategory array
        $footprintByCategory = [];

        // calculating each category and putting the results in an array
        foreach ($slicedResults as $slicedResult) {
            array_push($footprintByCategory, array_sum($slicedResult));
        }
        return $footprintByCategory;
    }
}
