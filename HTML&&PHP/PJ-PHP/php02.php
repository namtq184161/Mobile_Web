<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- B1 -->
    <?php
        echo "Ex1<br/>";
        $sum = 0;
        for($i=1; $i<=100; $i++){
            $sum += $i;
        }
        echo "tong cac STN tu 1 den 100 la: ".$sum."<br/>";
    ?>

    <!-- B2 -->
    <?php
        echo "Ex2<br/>";
        $sumOdd=0;
        $sumEven=0;
        for($so=1; $so<=50; $so++){
            if($so%2==0){
                $sumEven+=$so;
            } else{
                $sumOdd+=$so;
            }
        }
        echo "tong chan = ".$sumEven."<br/>";
        echo "tong le = ".$sumOdd."<br/>";
    ?>

    <!-- B3 -->
    <?php
        echo "Ex3<br/>";
        echo "C1:<br/>";
        $i = 1;
        $n = 7;
        $giai_thua=1;
        while($i<=$n){
            $giai_thua*=$i;
            $i++;
        }
        echo "giai thua cua ".$n." bang: ".$giai_thua."<br/>";
    ?>

    <?php
        echo "C2:<br/>";
        $n=7;
        $giai_thua=1;
        for($i=1; $i<=$n; $i++){
            $giai_thua*=$i;
        }
        echo "giai thua cua ".$n." bang: ".$giai_thua."<br/>";
    ?>

    <?php
        echo "C3:<br/>";
        $n=7;
        $i=1;
        $giai_thua=1;
        do{
            $giai_thua*=$i;
            $i++;
        } while($i<=$n);
        echo "giai thua cua ".$n." bang: ".$giai_thua."<br/>";
    ?>

    <?php
        echo "Ex4<br/>";
        
    ?>
</body>
</html>