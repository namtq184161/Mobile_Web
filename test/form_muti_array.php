<?php
if(isset($_POST["sbm"])){
    $str = "";
    foreach($_POST["mua"] as $value){
        $str .= $value." ";
    }
}
?>
<form method="POST">
    
    Xuan <input type="checkbox" name="mua[]" value="Xuan">       <!-- Đặt name bằng 1 mảng có thể chứa nhiều giá trị -->   
    Ha <input type="checkbox" name="mua[]" value="Ha">
    Thu <input type="checkbox" name="mua[]" value="Thu">
    Dong <input type="checkbox" name="mua[]" value="Dong">
    <input type="submit" name="sbm" value="Send">
</form>

<hr/>

<p>Nhung mua toi thich la: <?php if(isset($str)){echo $str;} ?></p>

