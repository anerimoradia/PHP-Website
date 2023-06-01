<?php

class User{
    private $id = 33;
    protected $username;
    private $email;
    private $password;



    public function __construct($username, $password){
        $this -> username = $username;
        $this -> password = $password;
    }
    public function register(){
        echo 'User registered';

    }

    public function login(){
        //echo $username.' is now logged in';
       
        $this -> auth_user();
        //$this -> auth_user($username, $password);
    }

    public function auth_user(){
        //echo $this -> username. ' is authenticated';
    }

    public function __destruct(){
        //echo 'Destructor Called';
    }
}

$User = new User('Aneri', '1234');          //Creation of object

echo $User -> username;
//$User -> register();
//$User -> login();

?>
