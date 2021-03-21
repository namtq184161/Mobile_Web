<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>PHP 03</title>
</head>
<body>

    <!-- Truyền dữ liệu theo phương thức port -->
    <?php
        if(isset($_POST["sbm"])){
            $user = $_POST["user"];
            $pass = $_POST["pass"];
            echo $user."<br/>".$pass;
        }   
    ?>
    <form method="post">
        <input type="text" name="user"/>
        <input type="password" name="pass"/>
        <input type="submit" name="sbm" value="Login"/>
    </form>

    
</body>
</html>