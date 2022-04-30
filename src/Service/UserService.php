<?php

namespace App\Service;

class UserService
{
    public function checkUserFields(array $credentials): array
    {
        $errors = [];

        if (!filter_var($credentials['mail'], FILTER_VALIDATE_EMAIL)) {
            $errors['email_must_be_email'] = "L'adresse e-mail saisie est incorrecte. ";
        }

        if (empty($credentials['password'])) {
            $errors['must_enter_password'] = 'Veuillez saisir votre mot de passe.';
        }

        return $errors;
    }
}
