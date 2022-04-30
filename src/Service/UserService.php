<?php

namespace App\Service;

class UserService
{
    public function checkUserFields(array $credentials): array
    {
        $errors = [];

        if (empty($credentials['mail'])) {
            $errors['must_enter_password'] = 'Veuillez saisir votre adresse e-mail.';
        }

        if (!filter_var($credentials['mail'], FILTER_VALIDATE_EMAIL)) {
            $errors['email_must_be_email'] = "L'adresse e-mail saisie est incorrecte. ";
        }

        if (empty($credentials['password'])) {
            $errors['must_enter_password'] = 'Veuillez saisir votre mot de passe.';
        }

        if (strlen($credentials['password']) > 20) {
            $errors['password_too_long'] = 'Votre mot de passe ne peut faire plus de 20 caractères.';
        }

        return $errors;
    }
}
