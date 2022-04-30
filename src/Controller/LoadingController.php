<?php

namespace App\Controller;

class LoadingController extends AbstractController
{
    public function index(): string
    {
        return $this->twig->render('Loading/loading.html.twig');
    }
}
