<?php
// include_once("php04_library.php"); //báo lỗi từ vị trí sai đến hết code
require_once("php04_library.php"); //báo lỗi ngay từ vị trí đầu trang

// echo tinhTong(100, 200) + 700;
// header();
$thu = 3;
switch($thu){
    case "2": 
        echo "Thu 2";
    break;
    case "3": 
        echo "Thu 3";
    break;
    case "4": 
        echo "Thu 4";
    break;
    case "5": 
        echo "Thu 2";
    break;
    case "6": 
        echo "Thu 6";
    break;
    case "7": 
        echo "Thu 7";
    break;
    case "CN": 
        echo "Thu CN";
    break;
    default: echo "Gia tri khong hop le";
}
?>


