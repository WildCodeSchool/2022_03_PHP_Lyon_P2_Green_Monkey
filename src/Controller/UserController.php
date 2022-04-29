<?php

namespace App\Controller;

use App\Model\UserManager;

class UserController extends AbstractController
{
    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mail'])) {
            $credentials = array_map('trim', $_POST);
            $userManager = new UserManager();
            $user = $userManager->selectOneByEmail($credentials['mail']);

            if ($user && $credentials['password'] === $user['password']) {
                $_SESSION['user_mail'] = $user['mail'];
                header('location: /admin');
            }
        }
        return $this->twig->render('Login/login.html.twig');
    }

    public function logout()
    {
        session_destroy();
    }
}
