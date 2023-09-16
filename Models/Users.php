<?php

namespace Models;

use Core\Model;

class Users extends Model
{
    public function getUsers()
    {
        $Query = "SELECT * FROM users where Email= ? and Password = ?";
        $value = array_values($_POST);
        return $this->SelectRow($Query,$value);
    }

    public function registerUser()
    {
        $Query = "insert into users (Name,Email,Password) values(?,?,?)";
        $value = array_values($_POST);
        return $this->InsertRow($Query , $value) ;
    }


}