<?php

namespace App\Model;

class AdminManager extends AbstractManager
{
    public const TABLE = 'answer';

    public function update(array $value): bool
    {
        $statement = $this->pdo->prepare("UPDATE " . self::TABLE . " SET `answer_value` = :answer_value WHERE id=:id");
        $statement->bindValue('id', $value['id'], \PDO::PARAM_INT);
        $statement->bindValue('answer_value', $value['answer_value'], \PDO::PARAM_INT);

        return $statement->execute();
    }
}
