<?php

namespace App\Controller;

use App\Model\ResultManager;

class ResultController extends AbstractController
{
    public function index(): string
    {
        $resultManager = new ResultManager();
        $values = $resultManager->fetchValuesByAnswer($_POST);
        $totalFootprint = $resultManager->calculateTotalFootprint($values);
        $footprintByCategory = $resultManager->calculateFootprintByCat($values);

        return $this->twig->render('Results/results.html.twig', [
            'values' => $values,
            'totalFootprint' => $totalFootprint,
            'footprintByCategory' => $footprintByCategory
        ]);
    }
}
