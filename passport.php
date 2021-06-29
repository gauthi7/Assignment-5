<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passport</title>
</head>
<body>
    <form action="passport_php.php" method="POST" ></form>
    <table border=1 >
    <tr><th style="text-align:center;" colspan=2 ><h1>Passport Form</h1> </th></tr>
    
    <tr>
    <td>Enter Passport Number</td>
    <td><input type="number" name=pnum ></td>
    </tr>

    <tr>
    <td>Enter First Name</td>
    <td><input type="text" name=n1 /></td>
    </tr>

    <tr>
    <td>Enter Middle Name</td>
    <td><input type="text" name=n2 /></td>
    </tr>

    <tr>
    <td>Enter Last Name</td>
    <td><input type="text" name=n3 /></td>
    </tr>

    <tr>
    <td>Enter DOb</td>
    <td><input type="date" name=dob /></td>
    </tr>

    <tr>
    <td>Enter Nationality</td>
    <td><input type="text" name=n /></td>
    </tr>

    <tr>
    <td>Enter address</td>
    <td><textarea name="a" id="" cols="30" rows="10"></textarea></td>
    </tr>

    <tr>
    <td>Select Gender</td>
    <td><input type="radio" name=gender  value=M/>Male <br> <input type="radio" name=gender  value=F/>Male </td>
    </tr>

    <tr>
    <td>Upload Picture</td>
    <td><input type="file" accept="image" name=pic /></td>
    </tr>

    <tr><td style="text-align:center;padding:20px;" colspan=2 > <input type="submit" value=submit></td></tr>
    <tr>

    </tr>
    </table>
</body>
</html>