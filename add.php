
<?php
include "includes/database.php";

?>

<html>
<head></head>

<title>glass cup enterprise || Add contact</title>
<body>


<div>
<a href="index.php">home</a>
<a href="add.php">add contact</a>
</div>

<h3>Add Conact</h3>

<?php
if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];

$query ="INSERT INTO contacts (name,phone,email,address) VALUES ('$name','$phone','$email','$address')";

	if ($con->query($query)) {
		echo "contact successfully added";
	}else{
		echo "an error occured";
	}
}


?>



<form action="" method="post">
<input type="text" name="name" placeholder="Full name">
<br>
<input type="text" name="phone" placeholder=" Your phone number">
<br>
<input type="text" name="email" placeholder="Your email">
<br>
<input type="text" name="address" placeholder="Your address">
<br>
<input type="submit" name="save" value="save" >
</form>


</table>
</body>

</html>