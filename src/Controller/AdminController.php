<?php

namespace App\Controller;

use App\Model\AdminManager;

class AdminController extends AbstractController
{
    public function index(): string
    {
        $adminManager = new AdminManager();
        $values = $adminManager->selectAll();
        return $this->twig->render('Admin/admin.html.twig', ['values' => $values]);
    }

    public function edit(): ?string
    {
        $adminManager = new AdminManager();
        $values = $adminManager->selectAll();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $values = array_map('trim', $_POST);

            // TODO validations (length, format...)

            // if validation is ok, update and redirection
            $adminManager->update($values);

            header('Location: /admin');

            // we are redirecting so we don't want any content rendered
            return null;
        }
        return $this->twig->render('Admin/admin.html.twig', ['values' => $values]);
    }
}
