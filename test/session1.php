<?php
    //Khai báo biến session
    // session_start(); //khai báo thư viện
    // $_SESSION["mail"] = "quangnam260800@gmail.com";
    // $_SESSION["pass"] = "123456";
    // echo $_SESSION["mail"]."<br/>".$_SESSION["pass"];

    //Khai báo hằng số
    define("PI", 3.14);
    if(defined("PI")){      //hàm kiểm tra sự tồn của 1 hằng số trả về giá trị true, false
        echo PI;
    }
?>