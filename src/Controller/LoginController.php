<?php

namespace App\Controller;

class LoginController extends AbstractController
{
    public function index(): string
    {
        return $this->twig->render('Login/login.html.twig');
    }
}
