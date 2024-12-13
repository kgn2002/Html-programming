<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>body{background-color: grey;}
    h1{font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;font-size: larger;}
        label{font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;font-size: large;}
.divcls{
	display:flex;
	justify-content:center;
}
form{
	display:flex;
	justify-content:center;
}
td{
text-align:left;
padding:20px;
font-family:"Sans-serif";
font-size:18px;
color:black;
}
th{
text-align:right;
padding:20px;
font-family:"Sans-serif";
font-size:px;
color:black;
}
    </style>
    <title>Form</title>
</head>
<body>
 <center> <h1>Application Form</h1><br><br></center>
<div class="divcls">
<form method="post" action="pgm12.php">
<table >
<tr>
<th>
<label>User name</label></th>
<td><input type="text" id="unameid" name="uname">
</td></tr>
<tr>
<th>
<label>Email</label></th>
<td><input type="email" id="email1" name="emailid">
</td></tr>
<tr>
<th>
<label>Mobile Number</label></th>
<td><input type="tel" id="phno" name="phno">
</td></tr>
<tr>
<th>
<label>Password</label></th><td>
<input type="password" id="passid" name="passid" >
</td>
</tr>
<tr>
<th>
<label>Confirm Password</label></th><td>
<input type="password" id="passid" name="cpassid" >
</td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Submit">
<input type="submit" value="Reset"></td></tr>
</table></form></div>
<?php
if(isset($_POST["uname"])&&isset($_POST["emailid"])&&isset($_POST["phno"])&&isset($_POST["passid"])&&isset($_POST["cpassid"]))
{
$uname=trim($_POST["uname"]);
$email=trim($_POST["emailid"]);
$phno=trim($_POST["phno"]);
$pass=trim($_POST["passid"]);
$cpass=trim($_POST["cpassid"]);
$errors=[];
$mobexp="/^\d{10}$/";
$emailexp="/[a-z0-9._%+-]+@[a-z.-]+\.[a-z]{3,3}$/";
$unameexp="/^[a-zA-Z0-9\. ]+$/";
if($uname=="" || $email=="" || $phno=="" || $pass=="" || $cpass=="")
{
 $errors[]="All fileds are mandatory";
}
if(!preg_match($unameexp,$uname))
{
    $errors[]="Username is incorrect";
}
if(!preg_match($mobexp,$phno))
{
    $errors[]="Phone number is incorrect";
}
if(!preg_match($emailexp,$email))
{
    $errors[]="Email  is incorrect";
}
if(strlen($pass)<8)
{
    $errors[]="Password should be minimum 8 characters";
}
if($pass!=$cpass)
{
    $errors[]="Password does not matches";
}
if(!empty($errors))
{
    foreach($errors as $i)
     echo "<center><li style=color:blue;font-size:20px;>$i</li></center>";
}
else
{
    echo "<h1>Registration completed successfully</h1>";
}
}

?>
</body>
</html>