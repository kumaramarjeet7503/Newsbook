<?php

namespace Controllers;

class Site extends \Core\BaseController
{
    protected string $Model = "Users";
    public function index()
    {
        $Users = $this->Database->getUsers();
        view('site/index' , compact('Users'));
    }

    public function login()
    {
        $error = false ;
        if(!empty($_POST))
        {
            $post = $_POST ;
            $Users = $this->Database->getUsers();
            if(!empty($Users))
            {
                $_SESSION['username'] = $Users[0]['Name'];
                redirect('news');
            }
            $error = true ;
        }
        view('site/login',['error'=>$error]);
    }

    public function signup()
    {
        if(!empty($_POST))
        {
            $Users = $this->Database->registerUser();
           return $Users;
        }
        view('site/signup' );
    }

    public function logout()
    {
        session_destroy();
        view('site/login' );
    }

}