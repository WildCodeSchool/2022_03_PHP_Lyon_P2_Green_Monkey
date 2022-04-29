<?php

namespace App\Controller;

use App\Model\ResultManager;
use App\Service\ResultService;

class ResultController extends AbstractController
{
    public function index(): string
    {
        // adding data to db
        $this->add();

        // fetching data from database and comparing it with POST
        $resultManager = new ResultManager();
        $values = $resultManager->fetchValuesByAnswer($_POST);

        // calculating footprint (total and by category)
        $resultService = new ResultService();
        $totalFootprint = $resultService->calculateTotalFootprint($values);
        $footprintByCategory = $resultService->calculateFootprintByCat($values);

        // rendering page with data we got earlier
        return $this->twig->render('Results/results.html.twig', [
            'values' => $values,
            'totalFootprint' => $totalFootprint,
            'footprintByCategory' => $footprintByCategory
        ]);
    }

    public function add(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $answers = array_map('trim', $_POST);

            $answersManager = new ResultManager();
            $answersManager->insert($answers);
        }
    }
}
