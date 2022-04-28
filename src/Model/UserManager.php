<?php

namespace App\Model;

use App\Model\Connection;
use PDO;

class UserManager extends AbstractManager
{
    protected PDO $pdo;

    public const TABLE = 'user';

    public function __construct()
    {
        $connection = new Connection();
        $this->pdo = $connection->getConnection();
    }

    public function selectOneByEmail(string $mail)
    {
        // prepared request
        $statement = $this->pdo->prepare("SELECT * FROM " . static::TABLE . " WHERE mail=:mail");
        $statement->bindValue('mail', $mail, \PDO::PARAM_STR);
        $statement->execute();

        return $statement->fetch();
        
    }
    

}