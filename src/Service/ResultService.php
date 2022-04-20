<?php

namespace App\Service;

class ResultService
{
    public function calculateTotalFootprint(array $values): float
    {
        // a simple sum of all values we got in the fetchValuesByAnswer function
        return array_sum($values);
    }

    public function calculateFootprintByCat(array $values): array
    {
        // dividing the values array in smaller arrays (4)
        // WON'T WORK if questions are added
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
