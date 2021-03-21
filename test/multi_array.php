<?php
session_start();
$_SESSION["cart"][9] = 2;
$_SESSION["cart"][7] = 3;
foreach($_SESSION["cart"] as $key => $value){
    echo $value."</br>";
}
?>