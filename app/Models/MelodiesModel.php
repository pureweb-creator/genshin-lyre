<?php

namespace App\Models;

use App\Core\Model;

class MelodiesModel extends Model
{
    public function getAllMelodies()
    {
        return $this->pdo->query('SELECT * from melodies')->fetchAll(\PDO::FETCH_OBJ);    
    }

    public function getMelody($id)
    { 
        $data = $this->pdo->prepare('SELECT * from melodies WHERE id = ?');
        $data->execute([$id]);    
        return $data->fetchAll(\PDO::FETCH_OBJ);
    }
}