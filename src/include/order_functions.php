<?php
//connect to db
require_once 'database.php';

function get_status($status){
    $result="неизвестно";
    switch($status){
        case 'accepted': 
            $result = "принят";
            break;
        case 'delivered': 
            $result = "доставлено";
            break;
        case 'cancelled': 
            $result = "отменено";
            break;
    };
    return $result;
};
