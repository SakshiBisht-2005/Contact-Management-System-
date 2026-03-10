<?php
include "db.php";

if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];

$result=mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$password'");

if(mysqli_num_rows($result)>0)
{
$row=mysqli_fetch_assoc($result);
$_SESSION['user_id']=$row['id'];

header("Location:index.php");
}
else
{
$error="Invalid Email or Password";
}
}
?>

<!DOCTYPE html>
<html>

<head>
<title>Login</title>
<link rel="stylesheet" href="auth.css">
</head>

<body>

<div class="auth-container">

<div class="auth-title">Welcome Back</div>

<?php
if(isset($error)){
echo "<div class='error'>$error</div>";
}
?>

<form method="POST">

<input type="email" name="email" placeholder="Email Address" required>

<input type="password" name="password" placeholder="Password" required>

<button name="login">Sign In</button>

</form>

<div class="auth-footer">
Don't have an account? <a href="register.php">Register</a>
</div>

</div>

</body>
</html>