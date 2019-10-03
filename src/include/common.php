<?php
session_start();
function get_my_current_user(){
  return $_SESSION['current_user'];
};

function set_my_current_user($user){
    $_SESSION['current_user']=$user;
};
