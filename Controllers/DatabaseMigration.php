<?php

namespace Controllers;
class DatabaseMigration extends \Core\BaseController
{
    protected string $Model = "Migration";
    public function createUsers()
    {
       $Users = $this->Database->createTableUser();
       redirect("site/signup");
    }
}

