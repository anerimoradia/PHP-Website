<?php

class People{
    public $person1 = 'Mike';
    public $person2 = 'Shelly';
    public $person3 = 'Jeff';


    protected $person4 = 'Aneri';
    private $person5 = 'Moradia';

    /*
    function iterateObject(){
        foreach($this as $key => $value){
            print "$key => $value\n";
        }
    }
    */
}

$people = new People;

foreach($people as $key => $value){
    print "$key => $value\n";
}

//$people->iterateObject();

?>
