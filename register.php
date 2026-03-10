<?php
include "db.php";

if(isset($_POST['register']))
{

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];

mysqli_query($conn,"INSERT INTO users(name,email,password)
VALUES('$name','$email','$password')");

$success="Account created successfully";

}
?>

<!DOCTYPE html>
<html>

<head>
<title>Register</title>
<link rel="stylesheet" href="auth.css">
</head>

<body>

<div class="auth-container">

<div class="auth-title">Create Account</div>

<?php
if(isset($success)){
echo "<div class='success'>$success</div>";
}
?>

<form method="POST">

<input type="text" name="name" placeholder="Full Name" required>

<input type="email" name="email" placeholder="Email Address" required>

<input type="password" name="password" placeholder="Password" required>

<button name="register">Create Account</button>

</form>

<div class="auth-footer">
Already have an account? <a href="login.php">Login</a>
</div>

</div>

</body>
</html>