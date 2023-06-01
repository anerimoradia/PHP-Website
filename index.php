<?php

 $myVar1 = 'Hello ';
 $myVar2 = 'World';

 echo $myVar1.$myVar2

$numbers = array(12, 45, 22, 34, 65);
$numbers = [12, 45, 22, 34, 65];

print_r($numbers);

echo $numbers[0];

$ages = array(
    "John" => 35,
    "Mary" => 27,
    "Bob" => 55
);

array_pop($ages);   //removes Bob
array_shift($ages);    //removes John 
print_r($ages);

echo $ages['Mary'];
echo count($ages);

for($i = 0; $i < 5; $i++){
    echo $i;
    
}

$i = 0;

while($i <= 10){
    echo 'Number' .$i. '<br />';
    $i++;
} 

$numbers = array(12, 45, 22, 34, 65);
$ages = array(
    "John" => 35,
    "Mary" => 27,
    "Bob" => 55
);
foreach($ages as $name => $age){
    echo $name. ' is' .$age. ' years old <br/>';
}


?>
