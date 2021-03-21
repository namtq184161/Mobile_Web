<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- <table align="center" border="1" cellspacing="1" cellpadding="1">
        <tr>
            <td colspan="10" bgcolor="#3366FF" align="center">Bảng Cửu Chương</td>
        </tr>
        <?php
            $tich=0;
            for($so=2; $so<=9; $so++){
                echo "<tr>";
                for($nhan=1; $nhan<=10; $nhan++){
                $tich=$so*$nhan;
                echo "<td>".$so."*".$nhan."=".$tich."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table> -->

    <table align="center" border="1" cellspacing="1" cellpadding="1">
        <tr>
            <td colspan="10" bgcolor="#3366FF" align="center">Bảng Cửu Chương</td>
        </tr>
        <?php
            for($i=2; $i<=9; $i++){
        ?>
        <tr>
            <?php
                for($j=1; $j<=10; $j++){
            ?>
            <td>
                <?php
                    echo $i."x".$j."=".$i*$j;
                ?>
            </td>
            <?php
                }
            ?>
        </tr>
        <?php
            }
        ?>
</table>
</body>