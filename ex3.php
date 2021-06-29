<html>
<head>
</head>
<body>
    <form action="" method="POST">
    User Name : <input type="text" name="username"><br><br>
    Password : <input type="password" name="password"><br><br>
    <input type="submit" name="login" value="LOGIN"><br><br>
    <input type="submit" name="logout" value="LOGOUT"><br><br>
    </form>
    <?php
    session_start();
    if(isset($_POST['login']))
    {
        if(($_SESSION["username"]==$_POST['username']) && ($_SESSION["password"]==$_POST['password']))
        {
            echo "Welcome Back";
        }
        else
        {
            $_SESSION["username"]=$_POST['username'];
            $_SESSION["password"]=$_POST['password'];
            echo $_SESSION["username"];
            echo "<br>This is your first visit";
        }
    }
    if(isset($_POST['logout']))
    {
        session_unset();
        echo $_SESSION["username"]=$_POST['username'];
    }
    ?>
</body>
</html>