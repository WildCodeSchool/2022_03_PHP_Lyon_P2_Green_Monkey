<?php

namespace App\Controller;

use App\Model\ResultManager;
use App\Service\ResultService;

class ResultController extends AbstractController
{
    public function index(): ?string
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $resultManager = new ResultManager();
            $resultService = new ResultService();

            $answers = array_map('trim', $_POST);

            // fetching data from database and comparing it with POST
            $values = $resultManager->fetchValuesByAnswer($answers);

            // calculating footprint (total and by category)
            $totalFootprint = $resultService->calculateTotalFootprint($values);
            $footprintByCategory = $resultService->calculateFootprintByCat($values);

            // adding data to db
            $resultManager->insert($answers, $totalFootprint, $footprintByCategory);

            // rendering page with data we got earlier
            return $this->twig->render('Results/results.html.twig', [
                'values' => $values,
                'totalFootprint' => $totalFootprint,
                'footprintByCategory' => $footprintByCategory
            ]);
        }
        header("location: /calculator");
        return null;
    }
}
