<?php
session_start();
echo $_SESSION["mail"]."<br/>".$_SESSION["pass"];

unset($_SESSION["mail"]); //loại bỏ 1 biến SESSION ngay lập tức
session_destroy();        //loại bỏ tất cả biến SESSION sau khi hoàn thành 1 phiên làm việc cuối cùng
?>