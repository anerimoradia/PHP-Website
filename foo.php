<?php

final class Foo{
//this final function will not be overriden by any other child classes
    final public function sayHello(){
        echo 'Hello World';
    }
}
?>
