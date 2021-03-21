<?php
// B1: Kết nối PHP với MySQL Server
$conn = mysqli_connect(
    "127.0.0.1", //"localhost"
    "root",      //""username"
    "",          //"password"
    "tqn_web"    //"database name"
);

// B2: Khai báo ngôn ngữ sử dụng trong CSDL
mysqli_query($conn, "SET NAMES 'utf8'");

// B3: Viết câu lệnh SQL
$sql = "SELECT * FROM thanh_vien
";

// B4: Thực thi lệnh SQL
$query = mysqli_query($conn, $sql);
// $row = mysqli_fetch_array($query);
// echo $row[1]."<br/>";
// echo $row["mat_khau"]."<br/>";

// echo "<pre>";
// print_r($row);
// echo "</pre>";

// while($row = mysqli_fetch_array($query)){
//     echo $row[1].",".$row["mat_khau"]."<br/>";
// }

echo $rows = mysqli_num_rows($query);
?>