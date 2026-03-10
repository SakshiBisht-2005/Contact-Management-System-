<?php
include "db.php";

$id=$_GET['id'];

$result=mysqli_query($conn,"SELECT * FROM contacts WHERE id=$id");

$row=mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];

mysqli_query($conn,"UPDATE contacts SET
name='$name',
phone='$phone',
email='$email',
address='$address'
WHERE id=$id");

header("Location:index.php?msg=Contact Updated Successfully");

}
?>

<html>

<head>
<link rel="stylesheet" href="dataset.css">
</head>

<body>

<div class="container">

<h1>Edit Contact</h1>

<form method="POST">

<input type="text" name="name" value="<?php echo $row['name']; ?>">

<input type="text" name="phone" value="<?php echo $row['phone']; ?>">

<input type="email" name="email" value="<?php echo $row['email']; ?>">

<input type="text" name="address" value="<?php echo $row['address']; ?>">

<button name="update">Update Contact</button>

</form>

</div>

</body>

</html>