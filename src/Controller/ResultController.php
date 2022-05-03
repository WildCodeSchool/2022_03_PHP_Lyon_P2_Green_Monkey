<?php

namespace App\Controller;

use App\Model\ResultManager;
use App\Service\ResultService;

class ResultController extends AbstractController
{
    public function index(): string
    {
        $resultManager = new ResultManager();
        $resultService = new ResultService();

        // adding data to db
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $answers = array_map('trim', $_POST);
            $resultManager->insert($answers);
        }

        // fetching data from database and comparing it with POST
        $values = $resultManager->fetchValuesByAnswer($_POST);

        // calculating footprint (total and by category)
        $totalFootprint = $resultService->calculateTotalFootprint($values);
        $footprintByCategory = $resultService->calculateFootprintByCat($values);

        // rendering page with data we got earlier
        return $this->twig->render('Results/results.html.twig', [
            'values' => $values,
            'totalFootprint' => $totalFootprint,
            'footprintByCategory' => $footprintByCategory
        ]);
    }
}
