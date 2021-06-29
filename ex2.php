<html>
<head>
</head>
<body>
    <?php
    if(!isset($_COOKIE['name']) || !isset($_COOKIE['seat']) || !isset($_COOKIE['meal']))
    {
    ?>
    <form method="post">
    <h1 style="background-color: red;color:white;border-radius:20px;width:600px;text-align:center;">Set your Flight preference</h1><br><br>
    <b>Name  </b><input type="text" name="name"><br>
    <br>
    <b>Seat Selection</b>
    <input type="radio" name="seat" value="Aisle">Aisle
    <input type="radio" name="seat" value="Window">Window
    <input type="radio" name="seat" value="Center">Center
    <br><br>
    <b>Meal Selection</b>
    <input type="radio" name="meal" value="Veg">Veg
    <input type="radio" name="meal" value="Non-Veg">Non-Veg
    <input type="radio" name="meal" value="Daibetic">Daibetic
    <input type="radio" name="meal" value="Child">Child
    <br><br>
    <input type="submit" name="submit" value="submit">
    </form>
    <?php
    }else{
        echo "<br>.....................................<br>";
        if(isset($_COOKIE['name']))
            $name1=$_COOKIE['name'];
        if(isset($_COOKIE['seat']))
            $seat1=$_COOKIE['seat'];
        if(isset($_COOKIE['meal']))
            $meal1=$_COOKIE['meal'];
        echo "<br>THANK YOU FOR SUBMISSION";
        echo "<br>The cookie Values are: $name1 <br> $seat1 <br> $meal1";
        echo "<br>............................................<br>";
    }
    if(isset($_POST['submit']))
    {
        if(isset($_POST['name']))
        {
            setcookie('name',$_POST['name'],time()+1000,'/');
        }
        if(isset($_POST['seat']))
        {
            setcookie('seat',$_POST['seat'],time()+1000,'/');
        }
        if(isset($_POST['meal']))
        {
            setcookie('meal',$_POST['meal'],time()+1000,'/');
        }
    }
    
    ?>
</body>
</html>