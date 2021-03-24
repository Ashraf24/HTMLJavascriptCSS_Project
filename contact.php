<?php
// database connection code
if(isset($_POST['name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db');

// get the post records

$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$pwd = $_POST['password'];


// database insert SQL code
$sql = "INSERT INTO `address` ( `name`, `email`, `password` ) VALUES ( '$txtName', '$txtEmail', '$pwd')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted and data sent to email address ";


}

else {
		echo "data can not be stored.";

	
}

$to = "$txtEmail";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: alam24web@gmail.com" . "\r\n";

$send=mail($to,$subject,$txt,$headers);

if ($send){
echo "emails sent successfully";
}
else
{
echo "email can not be sent from local server";	
	
}


}
else
{
	echo "Are you a genuine visitor?";
	
}
?>