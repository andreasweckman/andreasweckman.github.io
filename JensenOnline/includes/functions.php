<?php
session_start();

function redirect_to($new_location){
    header("Location: " . $new_location);
    exit;
}

function logged_in(){
    return isset($_SESSION["pnumber"]);
}

function confirm_logged_in(){
    if(!logged_in()){
        redirect_to("login.php");
    }
}
?>