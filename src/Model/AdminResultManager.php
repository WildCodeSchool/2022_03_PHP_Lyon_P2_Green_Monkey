<?php

namespace App\Model;

class AdminResultManager extends AbstractManager
{
    public const TABLE = 'user_results';

    public function select(): array
    {
        $query = 'SELECT fp_total, fp_cat1, fp_cat2, fp_cat3, fp_cat4 FROM ' . static::TABLE;

        return $this->pdo->query($query)->fetchAll();
    }
}
