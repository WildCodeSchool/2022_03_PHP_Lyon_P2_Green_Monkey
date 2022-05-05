<?php

namespace App\Service;

class StatService
{
    public function calculateTotal(array $values): array
    {
        $sum = 0;
        $increment = 0;

        foreach ($values as $value) {
            $sum += $value["fp_total"];
            $increment++;
        }
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
        $totalCat1 = 0;
        $totalCat2 = 0;
        $totalCat3 = 0;
        $totalCat4 = 0;

        $increment = 0;

        foreach ($values as $value) {
            $totalCat1 += $value["fp_cat1"];
            $totalCat2 += $value["fp_cat2"];
            $totalCat3 += $value["fp_cat3"];
            $totalCat4 += $value["fp_cat4"];
            $increment++;
        }

        $totalCat1Avg = $totalCat1 / $increment;
        $totalCat2Avg = $totalCat2 / $increment;
        $totalCat3Avg = $totalCat3 / $increment;
        $totalCat4Avg = $totalCat4 / $increment;

        $totalCatArray = [$totalCat1Avg, $totalCat2Avg, $totalCat3Avg, $totalCat4Avg];

        return $totalCatArray;
    }
}
