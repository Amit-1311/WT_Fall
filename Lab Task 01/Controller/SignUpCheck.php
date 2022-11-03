<?php

$fname=$lname=$uname=$pass=$cpass=$age=$gender=$mobileNo=$email="";
$fnameerr=$lnameerr=$unameerr=$passerr=$cpasserr=$ageerr=$gendererr=$mobileNoerr=$emailerr="";

if(isset($_POST["SignUp"]))
{
if(empty(strlen($_POST["fname"])<8))
{
    $fnameerr= "Name Cannot Be More Than 8 Chars!";
}
else
{
    $fnameerr="Your Name Is " .$_POST["fname"];
}

if(empty($_POST["lname"]))
{
    $lnameerr= "Last Name Is Required!";
}
else
{
    $lnameerr="" .$_POST["lname"];
}

if(($_POST["age"])<18)
{
        $ageerr= "Age Is Invalid!";
}
else
{
        $ageerr="Your Age Is " .$_POST["age"];
}

$email = $_POST['email'];
if(empty($email))
{
    $emailerr = "Please Enter E-mail";
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $emailerr = "Invalid E-mail Address";
}
else
{
    $emailerr = "Your E-mail Is " .$_POST["email"];
}

if(empty($_POST["mobileNo"]))
{
    $mobileNoerr = "Please Enter Mobile Number";
}
elseif(!preg_match("/^[0]\d{10}$/",$_POST['mobileNo']))
{
    $mobileNoerr = "Invalid Mobile Number";
}
else
{
    $mobileNoerr = "Your Mobile Number Is " .$_POST['mobileNo'];
}
}
?>