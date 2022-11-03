<?php

include ("../Controller/SignUpCheck.php");

?>
<!DOCTYPE html>
<html>
<head>
<title> Sign Up </title>
</head>
<body>
<div>
<form action="" method="post">
    <h1 align="center"><b><u> Create Your Account </u></b></h1>
<br>
<table align="center">
<tr>
    <td><label for="fname">First Name:</label></td>
    <td><input type="text" id="fname" name="fname" placeholder="Enter Your First Name">
<?php

echo"<span style='color:red;'><small><b>".$fnameerr."</b></small></span>";

?>
</td>
</td>
</tr>

<tr>
    <td><label for="lname">Last Name:</label></td>
    <td><input type="text" id="lname" name="lname" placeholder="Enter Your Last Name">
<?php

echo"<span style='color:red;'><small><b>".$lnameerr."</b></small></span>";

?>
</td>
</tr>

<tr>
    <td><label for="uname">Username:</label></td>
    <td><input type="text" id="uname" name="uname">
<?php

echo"<span style='color:red;'><small><b>".$unameerr."</b></small></span>";

?>
</td>
</tr>

<tr>
    <td><label for="pass">Password:</label></td>
    <td><input type="Password" id="pass" name="pass" placeholder="Enter Your Password">
</td>
</tr>

<tr>
    <td><label for="cpass">Confirm Password:</label></td>
    <td><input type="Password" id="cpass" name="cpass">
</td>
</tr>

<tr>
    <td><label for="dob">Date Of Birth:</label></td>
    <td><input type="date" id="dob" name="dob">
<?php

echo"<span style='color:red;'><small><b>".$doberr."</b></small></span>";

?>
</td>
</tr>

<tr>
    <td><label for="age">Age:</label></td>
    <td><input type="number" id="age" name="age" min="1" placeholder="Enter Your Age">
<?php

echo"<span style='color:red;'><small><b>".$ageerr."</b></small></span>";

?>
</td>
</tr>

<tr>
    <td><label for="gender">Gender:</label></td>
    <td>
    <input type="radio" id="male" name="gender" value="Male">Male
    <input type="radio" id="female" name="gender" value="Female">Female
<?php

echo"<span style='color:red;'><small><b>".$gendererr."</b></small></span>";

?>
</td>
</tr>

<tr>
    <td><label for="mobileNo">Mobile No:</label></td>
    <td><input type="text" id="mobileNo" name="mobileNo">
<?php

echo"<span style='color:red;'><small><b>".$mobileNoerr."</b></small></span>";

?>
</td>
</tr>

<tr>
    <td><label for="email">E-Mail:</label></td>
    <td><input type="text" id="email" name="email" placeholder="Enter Your E-mail">
<?php

echo"<span style='color:red;'><small><b>".$emailerr."</b></small></span>";

?>

</td>
</tr>

<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>

<tr>
<td></td>
<td>

    <input type="submit" name="SignUp" value="SignUp">
    <input type="reset" name="Reset">

</td>
</tr>
</table>
</form>
</div>
</body>
</html>