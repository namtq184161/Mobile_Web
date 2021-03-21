
<!-- Array -->

<!-- <?php
    $mang = array();
    $mang[0] = 3.14;
    $mang[1] = "HTML";
    $mang[3] = true;
    echo $mang[0];
?>

<?php
    $mang = array(3.14, "HTML", true);
    echo $mang[2];
?>

<?php
    $mang = array(3.14, "mon hoc"=>"HTML", true);
    echo $mang[1]; //in ra giá trị của true

    $mang = array("so thuc"=>3.14, "HTML", true);
    echo $mang[0]; //in ra HTML

?> -->

<?php
    $mang = array();
    $mang[0] = 3.14;
    $mang[1] = "HTML";
    $mang[2] = true;
    foreach ($mang as $key => $value) {
        echo $key."=>".$value."<br/>";
    }
?>