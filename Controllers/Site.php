<?php

namespace Controllers;

class Site extends \Core\BaseController
{
    protected string $Model = "Users";

    /**
     * render index page 
     */
    public function index()
    {
        $Users = $this->Database->getUsers();
        view('site/index' , compact('Users'));
    }

    /**
     * @param array $_POST
     * @return render login 
     */
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

    /**
     * @param array $_POST
     * @return  render login
     */
    public function signup()
    {
        if(!empty($_POST))
        {
            $Users = $this->Database->registerUser();
            $_SESSION['register'] = true;
           return $Users;
        }
        view('site/signup' );
    }

    /**
     * @param array $_POST
     * @return  render login
     */
    public function logout()
    {
        session_destroy();
        view('site/login' );
    }

}