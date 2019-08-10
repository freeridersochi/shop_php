<?php 

$first = ""; //22(10)
$second = 0x2a ;//42
$name = 'Андрей' ;
//print_r ("I\'ll beback with \$name");

$array = ['red', 'green', 'blue'];
$length = count($array);
 
$check = is_array($second);
if ($check === true){
    $result = "true";
}else{
    $result = "false";
};

$result = $check === true ? 'true' : 'false';

//print_r ( 'Result: '.$result );

$phonebook = [ 
               [ 'ASPEN' => 124 , 'AIDAHO' => 234 , 'ANCORIDJE' => 245 ], 
               [ 'BOSTON' => [ 'CODE' => 235 , 'ZIP' => 777 ],'BALTIMORE' => 235 ] 
             ];
print_r ('Boston: <br>'.$phonebook[1]['BOSTON']['CODE'].' and '.$phonebook[1]['BOSTON']['ZIP']);