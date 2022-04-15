<?php

namespace App\Controller;

use App\Model\AdminManager;

class AdminController extends AbstractController
{
    public function index(): string
    {
        return $this->twig->render('Admin/admin.html.twig');
    }
}
