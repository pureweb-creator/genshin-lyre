<?php

namespace App\Models;

use App\Core\Model;

class UserModel extends Model
{
    public function getAllUsers(): bool|\PDOStatement
    {
        return $this->pdo->query('SELECT * FROM user');
    }
}