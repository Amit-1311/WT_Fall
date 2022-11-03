<?php

$fname=$lname=$uname=$pass=$cpass=$dob=$age=$gender=$mobileNo=$email="";
$fnameerr=$lnameerr=$unameerr=$passerr=$cpasserr=$doberr=$ageerr=$gendererr=$mobileNoerr=$emailerr="";
$hasError= true;

if(isset($_REQUEST["SignUp"]))
{
if(empty(strlen($_REQUEST["fname"])<8))
{
    $fnameerr= "Name Cannot Be More Than 8 Chars!";
}
else
{
    $fnameerr="Your Name Is " .$_REQUEST["fname"];
}

if(empty($_REQUEST["lname"]))
{
    $lnameerr= "Last Name Is Required!";
}
else
{
    $lnameerr="" .$_REQUEST["lname"];
}

if(($_REQUEST["age"])<18)
{
        $ageerr= "Age Is Invalid!";
}
else
{
        $ageerr="Your Age Is " .$_REQUEST["age"];
}

$email = $_REQUEST['email'];
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
    $emailerr = "Your E-mail Is " .$_REQUEST["email"];
}

if(empty($_REQUEST["mobileNo"]))
{
    $mobileNoerr = "Please Enter Mobile Number";
}
elseif(!preg_match("/^[0]\d{10}$/",$_REQUEST['mobileNo']))
{
    $mobileNoerr = "Invalid Mobile Number";
}
else
{
    $mobileNoerr = "Your Mobile Number Is " .$_REQUEST['mobileNo'];
}
}

if($_SERVER['REQUEST_METHOD']=='POST'and $hasError) 
{
    $existingdata=file_get_contents("../Data/SignUpData.json");
    $existingdatainphp=json_decode($existingdata);

    $myarr=array(
        "First Name" => $_REQUEST["fname"],
        "Last Name" => $_REQUEST["lname"],
        "User Name" => $_REQUEST["uname"],
        "Password" => $_REQUEST["pass"],
        "Date Of Birth" => $_REQUEST["dob"],
        "Age" => $_REQUEST["age"],
        "Gender" => $_REQUEST["gender"],
        "Mobile No" => $_REQUEST["mobileNo"],
        "E-mail" => $_REQUEST["email"]
    );

    $existingdatainphp[]=$myarr;
    $myjsonobj= json_encode($existingdatainphp,JSON_PRETTY_PRINT);
    file_put_contents("../Data/SignUpData.json",$myjsonobj);

    $mydata=file_get_contents("../Data/SignUpData.json");
    $myphpdata=json_decode($mydata);
}

?>