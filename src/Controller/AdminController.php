<?php

namespace App\Controller;

use App\Model\AdminManager;
use App\Model\AdminResultManager;
use Controller\UserController;
use App\Service\AdminService;
use App\Service\StatService;

class AdminController extends AbstractController
{
    public function index(): ?string
    {
        if (!isset($_SESSION['user_mail'])) {
            header('Location: ../login');
            return null;
        }

        return $this->twig->render('Admin/index.html.twig');
    }

    public function showAnswers(): ?string
    {
        if (!isset($_SESSION['user_mail'])) {
            header('Location: ../login');
            return null;
        }
        $adminResultManager = new AdminResultManager();
        $results = $adminResultManager->selectAll();
        return $this->twig->render('Admin/answers.html.twig', ['results' => $results]);
    }

    public function edit(): ?string
    {
        $errors = [];

        if (!isset($_SESSION['user_mail'])) {
            header('Location: ../login');
            return null;
        }

        $adminManager = new AdminManager();
        $values = $adminManager->selectAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['answer_value'])) {
            $values = array_map('trim', $_POST);

            // Validation service
            $adminService = new AdminService();
            $errors = $adminService->checkAdminFields($values);

            // Executing query
            if (empty($errors)) {
                $adminManager = new AdminManager();
                $adminManager->update($values);

                header('Location: /admin/edit');
                return null;
            }
        }
        return $this->twig->render('Admin/edit.html.twig', ['values' => $values, 'errors' => $errors]);
    }

    public function stats(): ?string
    {
        if (!isset($_SESSION['user_mail'])) {
            header('Location: ../login');
            return null;
        }

        // fetching values from db
        $adminResultManager = new AdminResultManager();
        $values = $adminResultManager->selectAll();

        $statService = new StatService();
        $total = $statService->calculateTotal($values);
        $totalAvg = $statService->calculateAvgTotal($total);
        $totalCatArray = $statService->calculateAvgByCategory($values);

        return $this->twig->render(
            'Admin/stats.html.twig',
            [
                'total' => $total,
                'totalAvg' => $totalAvg,
                'totalCatArray' => $totalCatArray
            ]
        );
    }
}
