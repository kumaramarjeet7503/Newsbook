<?php

namespace Models;

use Core\Model;

class Users extends Model
{
    public function getUsers()
    {
        $Query = "SELECT * FROM kumaramarjeet7503_users where Email= ? and Password = ?";
        $value = array_values($_POST);
        return $this->SelectRow($Query,$value);
    }

    public function registerUser()
    {
        $Query = "insert into kumaramarjeet7503_users (Name,Email,Password) values(?,?,?)";
        $value = array_values($_POST);
        return $this->InsertRow($Query , $value) ;
    }


}