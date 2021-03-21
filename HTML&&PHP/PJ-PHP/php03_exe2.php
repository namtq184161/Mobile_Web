<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            background: 
            <?php
                if(isset($_GET["color"])){
                echo $_GET["color"];
                }
            ?>;
        }
    </style>
</head>
<body>      
    <a href="php03_exe2.php ?color= blue">Blue</a>
    <a href="php03_exe2.php ?color= red">Red</a>
    <a href="php03_exe2.php ?color= white">Default</a>
</body>
</html>