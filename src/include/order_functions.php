<?php
//connect to db
require_once 'database.php';

function get_status($status){
    $result="неизвестно";
    switch($status){
        case 'accepted': 
            $result = "принят";
            break;
        case 'in_process': 
            $result = "отгружен";
            break;
        case 'courier': 
            $result = "у курьера";
            break;
        case 'delivered': 
            $result = "доставлен";
            break;
        case 'cancelled': 
            $result = "отменено";
            break;
    };
    return $result;
};
