<?php

namespace Models;

use Core\Model;

class Migration extends Model
{
    public function createTableUser()
    {
        $query = 'CREATE TABLE kumaramarjeet7503_users (ID SERIAL PRIMARY KEY,Name VARCHAR(150),Email VARCHAR(500),Password VARCHAR(50));' ;
        return $this->CreateTable($query);
    }

}