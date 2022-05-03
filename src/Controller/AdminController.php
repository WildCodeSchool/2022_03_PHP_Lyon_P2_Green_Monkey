<?php

namespace App\Controller;

use App\Model\AdminManager;
use Controller\UserController;

class AdminController extends AbstractController
{
    public function index(): string
    {
        if (!isset($_SESSION['user_mail'])) {
            return $this->twig->render('Home/homepage.html.twig');
        }

        return $this->twig->render('Admin/accueiladmin.html.twig');
    }

    public function answers(): string
    {
        if (!isset($_SESSION['user_mail'])) {
            return $this->twig->render('Home/homepage.html.twig');
        }

        return $this->twig->render('Admin/answers.html.twig');
    }

    public function edit(): ?string
    {
        if (!isset($_SESSION['user_mail'])) {
            header('location: /login');
        }

        $adminManager = new AdminManager();
        $values = $adminManager->selectAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['answer_value'])) {
            $values = array_map('trim', $_POST);

            // TODO validations (length, format...)

            // if validation is ok, update and redirection
            $adminManager->update($values);

            header('Location: /admin');

            // we are redirecting so we don't want any content rendered
            return null;
        }
        return $this->twig->render('Admin/admin.html.twig', ['values' => $values,]);
    }

    public function stats(): string
    {
        /*if (!isset($_SESSION['user_mail'])) {
            return $this->twig->render('Home/homepage.html.twig');
        }*/
        return $this->twig->render('Admin/stats.html.twig');
    }
}
