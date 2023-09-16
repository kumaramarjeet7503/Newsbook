<?php

namespace Controllers;
class DatabaseMigration extends \Core\BaseController
{
    protected string $Model = "Migration";

    /**
     * Create users table
     * @return redirect to signup
     */
    public function createUsers()
    {
       $Users = $this->Database->createTableUser();
       redirect("site/signup");
    }
}

