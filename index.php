<?php
include "db.php";

if(!isset($_SESSION['user_id']))
{
header("Location:login.php");
}

$user=$_SESSION['user_id'];

$search="";

if(isset($_GET['search']))
{
$search=$_GET['search'];
$query="SELECT * FROM contacts WHERE user_id=$user AND name LIKE '%$search%'";
}
else
{
$query="SELECT * FROM contacts WHERE user_id=$user";
}

$result=mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>

<head>

<title>Contact Manager</title>
<link rel="stylesheet" href="dataset.css">

<script>

function confirmDelete()
{
return confirm("Are you sure you want to delete this contact?");
}

</script>

</head>

<body>

<div class="container">

<h1>📒 Contact Manager</h1>

<?php
if(isset($_GET['msg']))
{
echo "<div class='success'>".$_GET['msg']."</div>";
}
?>

<div class="top-bar">

<form class="search-box" method="GET">
<input type="text" name="search" placeholder="🔎 Search contact">
</form>

<a href="add_contact.php">
<button class="add-btn">+ Add Contact</button>
</a>

<a href="logout.php">
<button class="logout-btn">Logout</button>
</a>

</div>

<table>

<tr>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th>Address</th>
<th>Actions</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

echo "<tr>

<td>".$row['name']."</td>
<td>".$row['phone']."</td>
<td>".$row['email']."</td>
<td>".$row['address']."</td>

<td>

<a href='edit_contact.php?id=".$row['id']."'>
<button class='edit-btn'>Edit</button>
</a>

<a href='delete_contact.php?id=".$row['id']."' onclick='return confirmDelete()'>
<button class='delete-btn'>Delete</button>
</a>

</td>

</tr>";

}

?>

</table>

</div>

</body>

</html>