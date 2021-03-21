<!-- Truyền dữ liệu theo kiểu get -->

<a href="php03_2.php ?ten= Tran Quang Nam &tuoi= 19 &noisong= Ha Noi">Tran Quang Nam</a>
<a href="php03_2.php ?ten= Tran Quang Viet &tuoi= 24 &noisong= Nghe An">Tran Quang Viet</a>
<hr/>


<?php
    if(isset($_GET["ten"]) && isset($_GET["tuoi"]) && isset($_GET["noisong"])){
        $ten = $_GET["ten"];
        $tuoi = $_GET["tuoi"];
        $noisong = $_GET["noisong"];
        echo $ten."<br/>".$tuoi."<br/>".$noisong;
    }
?>