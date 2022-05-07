<?php

namespace App\Controller;

use App\Model\ResultManager;
use App\Service\ResultService;

class ResultController extends AbstractController
{
    public function index(): ?string
    {
        $resultManager = new ResultManager();
        $resultService = new ResultService();

        for ($i = 1; $i < 17; $i++) {
            $answers[] = "q" . $i . "_choice" . rand(1, 4);
        }

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
        header("location: calculator");
        return null;
    }
}
