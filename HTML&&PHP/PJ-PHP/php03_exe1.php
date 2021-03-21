<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body{
            background: 
            <?php
                if(isset($_POST["color"])){
                echo $_POST["color"];
                }
            ?>;
        }
    </style>
</head>
<body>      
    <form method="post">
        Blue    <input type="radio" name="color" value="blue"/>
        Red     <input type="radio" name="color" value="red"/>
        Default <input type="radio" name="color" value="white"/>
        <input type="submit" name="sbm" value="Change background">
    </form>
</body>
</html>