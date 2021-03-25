## Project Name
BASIC HTML,Javascript,CSS,JQuery,RESFTful,PHP,MYSQL, TEST Project

## Objective

** To demonstrate HTML5, CSS3 and JavaScript (jQuery) skills.
** To demonstrate understanding ofREST and SOAP APIs. 
** To demonstrate front-end and design skills.

## Technologies

Technologies 
BackEnd-end
•	PHP and MySQL
Front-end
•	Bootstrap 
•	jQuery

## Setup

step1:
extract the zip folder local server like WAMP,MAMP or XAMPP. 

step2:
upload db.sql database in your mysql database. Put usernane, password of the local server as default. 

step3:
From local server run homepage through any browser then navigate to page 1 or 2.
test user form from page 1. also click to page2 for restful Api integration which fetch images with title from external web link and parse data from JSON file.

Code Examples of backend data stored.

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



## Features
to store information from page 1

Target1:

Registration form
•	Fields:
o	Name (required),
o	Email (required), 
o	Password (required)
o	Validate Password (required)
o	Front-end validation using JQERY 
o	Back-end validate and save all the data in a DB table.
o	Send Email using PHP

Target2: 

to see the Carousel title with the name of the location. 
o	fetch the images data from https://jsonplaceholder.typicode.com/photos and parse the JSON
o	Use the image url from the JSON to present 5 images into the carousel.
o	To see controls to navigate to each slide
o	To see the image’s title for each image

## Implementation

Objective of the project is fullfiled and could be improved in future.

## Testing

Test the project with latest crhome browser both web and mobile and mannually test user form and user interface and project met the objective it was intially been set.

## To-do list:

animation could be done of the effect using jQuery.
User Interface could be improved.


## Status
Project is: in finished mode. object is fulfilled.

Inspiration

Project inspired by recent Technical Test for Task 1  and Task 2

## Contact
Created by @ashraful24 - feel free to contact me!
alam24@usa.com
