<?php 

require_once './src/include/checkout_functions.php';
$user = [
    'name' -> 'fjdslkf',
    'email' -> 'sdf@fdsj.com'
];
$address
$result = checkout($user, $address, $orders);
print $result;

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

$page= [
    'data'=>['a','b','c'], 
    'current'=>1,
    'total'=>6
];
$next = $page['current'] < $page['total'];
$prev = $page['current'] > 1;
echo (current);

print_r('page: '.$page['data']."</br> hasnext: ".($next?'yes':'no')."</br>hasprev:".($prev?'yes':'no')."<br>        position".$page['current'].'/'.$page['total']);