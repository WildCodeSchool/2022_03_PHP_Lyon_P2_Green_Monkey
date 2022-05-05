<?php

namespace App\Controller;

use App\Model\UserManager;
use App\Service\UserService;

class UserController extends AbstractController
{
    public function login()
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mail'])) {
            $credentials = array_map('trim', $_POST);

            // Validation service
            $userService = new UserService();
            $errors = $userService->checkUserFields($credentials);

            // Last validation (is it supposed to be here or in UserService?)
            $userManager = new UserManager();
            $user = $userManager->selectOneByEmail($credentials['mail']);

            if ($user == false || !password_verify($credentials['password'], $user['password'])) {
                $errors['incorrect_credentials'] = 'Mauvais identifiants. Veuillez les saisir de nouveau.';
            }

            // Finally logging)in
            if (empty($errors)) {
                $_SESSION['user_mail'] = $user['mail'];
                header('Location: /admin');
            }
        }
        return $this->twig->render('Login/login.html.twig', ['errors' => $errors]);
    }

    public function logout()
    {
        session_destroy();
        header('location: /');
    }
}
