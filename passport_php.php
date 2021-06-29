<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passport Information</title>
</head>
    <?php
        $pnum=$_POST['pnum'];
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $n3=$_POST['n3'];
        $dob=$_POST['dob'];
        $n=$_POST['n'];
        $a=$_POST['a'];
        $gender=$_POST['gender'];
        $pic=$_POST['pic'];
    
        $obj=new mysqli("localhost","root","","travel");
        if($obj==false)
        {
            die("Error! ".mysql_connect_error());
        }
        else
        {
            $q1="insert into passport values($pnum,'$n1','$n2','$n3','$dob','$n','$a','$gender','$pic');
            $result1 =$obj->query($q1);
    
            $q2="select * from passport";
            $result2=$obj->query($q2);
            $c=mysqli_num_rows($result2);
            $count=$c+1;
            echo "PASSPORT DETAILS";
            echo "<table>";
            while($row=$result2->fetch_array())
            {
                echo "<tr><td colspan=2 > $pic </td></tr>";
                echo "<tr><td>Passport Number</td> <td>$pnum</td></tr>";
                echo "<tr><td>First Name</td> <td></td>$n1</tr>";
                echo "<tr><td>Middle Name</td> <td>$n2</td></tr>";
                echo "<tr><td>Last Name</td> <td>$n3</td></tr>";
                echo "<tr><td>Date of Birth</td> <td>$dob</td></tr>";
                echo "<tr><td>Nationality</td> <td>$n</td></tr>";
                echo "<tr><td>Address</td> <td></td>$a</tr>";
                echo "<tr><td>Gender</td> <td>$gender</td></tr>";
                
            }
            echo "</table>";
        }
    ?>
    

<body>
    
</body>
</html>