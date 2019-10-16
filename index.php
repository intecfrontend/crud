
<?php
include "includes/database.php";

?>

<html>
<head></head>

<title>glass cup enterprise || Edit contact</title>


<body>
<div>
<a href="index.php">home</a>
<a href="add.php">add contact</a>
</div>

<h3>Simple contact manager</h3>

<table>
<tr>
  <th>Name</th>
  <th>Phone</th>
  <th>Email</th>
  <th>Address</th>
</tr>

<?php 

$getcontacts = mysqli_query($con,"SELECT * FROM contacts");

while ($contacts=mysqli_fetch_array($getcontacts)) {
	$id = $contacts['id'];

	$name = $contacts['name'];
	$phone = $contacts['phone'];
	$email = $contacts['email'];
	$address = $contacts['address'];
echo "<tr>";
echo "<td>".$name."</td><td>".$phone."</td><td>".$email."</td><td>".$address."</td><td><a href='delete.php?id=$id'>delete</a></td><td><a href='edit.php?id=$id'>edit</a></td>";
echo "</tr>";
}
?>

</table>
</body>

</html>