<?php

class User{

    public function __construct(){
        //echo 'Constructor Called';
    }
    public function register(){
        echo 'User registered';

    }

    public function login($username, $password){
        //echo $username.' is now logged in';
        $this -> auth_user($username, $password);
    }

    public function auth_user($username, $password){
        echo $username. ' is authenticated';
    }

    public function __destruct(){
        //echo 'Destructor Called';
    }
}

$User = new User;          //Creation of object

//$User -> register();
$User -> login('Aneri', '1234');

?>
