<?php

namespace App\Service;

class AdminService
{
    public function checkAdminFields(array $values): array
    {
        $errors = [];

        if (!filter_var($values['answer_value'], FILTER_VALIDATE_FLOAT)) {
            $errors['value_must_be_float'] = 'La valeur doit être un nombre.';
        }

        if ($values['answer_value'] < 0) {
            $errors['value_must_be_positive'] = 'La valeur ne peut être inférieure à 0.';
        }

        if ($values['answer_value'] >= 10000) {
            $errors['value_must_be_reasonable'] = 'La valeur ne peut être supérieure à 10 000.';
        }

        if (empty($values['answer_value'])) {
            $errors['value_must_exist'] = 'Veuillez entrer une valeur.';
        }

        return $errors;
    }
}
