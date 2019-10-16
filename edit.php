
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



<body>

	<h4>Edit Contact</h4>

	<?php
if (isset($_POST['save'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];

$query ="UPDATE contacts SET name='$name',phone='$phone',email='$email',address='$address' WHERE id=$id";

	if ($con->query($query)) {
		echo "contact successfully updated";
	}else{
		echo "an error occured".$con->error;
	}
}

?>

<?php
$id = $_REQUEST['id'];
$getcontacts = mysqli_query($con,"SELECT * FROM contacts WHERE id=$id");

while ($contacts=mysqli_fetch_array($getcontacts)) {

	$name = $contacts['name'];
	$phone = $contacts['phone'];
	$email = $contacts['email'];
	$address = $contacts['address'];

?>


<form action="" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>">

<input type="text" name="name" placeholder="Full name" value="<?php echo $name; ?>">
<br>
<input type="text" name="phone" placeholder="Your phone number" value="<?php echo $phone;?>">
<br>
<input type="text" name="email" placeholder="Your email" value="<?php echo $email;?>">
<br>
<input type="text" name="address" placeholder="Your address" value="<?php echo $address;?>">
<br>
<input type="submit" name="save" value="save" >
</form>


<?php
}
?>

</table>
</body>

</html>