<?php

include "db.php";

if(!isset($_SESSION['user_id']))
{
header("Location:login.php");
}

$user = $_SESSION['user_id'];

if(isset($_POST['submit']))
{

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];

mysqli_query($conn,"INSERT INTO contacts(name,phone,email,address,user_id)
VALUES('$name','$phone','$email','$address','$user')");

header("Location:index.php?msg=Contact Added Successfully");

}

?>

<html>

<head>
<link rel="stylesheet" href="dataset.css">
</head>

<body>

<div class="container">

<h1>Add Contact</h1>

<form method="POST">

<input type="text" name="name" placeholder="Enter Name" required>

<input type="text" name="phone" placeholder="Enter Phone" required>

<input type="email" name="email" placeholder="Enter Email">

<input type="text" name="address" placeholder="Enter Address">

<button name="submit">Save Contact</button>

</form>

</div>

</body>
</html>