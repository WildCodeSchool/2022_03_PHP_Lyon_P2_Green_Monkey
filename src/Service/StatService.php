<?php

namespace App\Service;

class StatService
{
    public function calculateTotal(array $values): array
    {
        // initializing values
        $sum = 0;
        $increment = 0;

        // calculating total
        foreach ($values as $value) {
            $sum += $value["fp_total"];
            $increment++;
        }

        // putting total AND increment (number of answers) in an array
        $total = ["sum" => $sum, "increment" => $increment];

        return $total;
    }

    public function calculateAvgTotal(array $total): float
    {
        $totalAvg = $total["sum"] / $total["increment"];
        return $totalAvg;
    }

    public function calculateAvgByCategory(array $values): array
    {
        // initializing values
        $totalCat1 = 0;
        $totalCat2 = 0;
        $totalCat3 = 0;
        $totalCat4 = 0;

        $increment = 0;

        // calculating total for each category
        foreach ($values as $value) {
            $totalCat1 += $value["fp_cat1"];
            $totalCat2 += $value["fp_cat2"];
            $totalCat3 += $value["fp_cat3"];
            $totalCat4 += $value["fp_cat4"];
            $increment++;
        }

        // calculating averages
        $totalCat1Avg = $totalCat1 / $increment;
        $totalCat2Avg = $totalCat2 / $increment;
        $totalCat3Avg = $totalCat3 / $increment;
        $totalCat4Avg = $totalCat4 / $increment;

        // putting them in an array
        $totalCatArray = [$totalCat1Avg, $totalCat2Avg, $totalCat3Avg, $totalCat4Avg];

        return $totalCatArray;
    }
}
