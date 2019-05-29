	<?php

$link = mysqli_connect("localhost", "root", "", "meal_king");
 
// Check connection

if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security

$name = mysqli_real_escape_string($link, $_POST['name']);

$email_address = mysqli_real_escape_string($link, $_POST['email']);

$phone_number = mysqli_real_escape_string($link, $_POST['phone']);

$no_of_person = mysqli_real_escape_string($link, $_POST['number']);
 
// attempt insert query execution

$sql = "INSERT INTO meal_king (name, email_address, phone_number, no_of_person) VALUES ('$name', '$email_address', $phone_number, $no_of_person)";

if(mysqli_query($link, $sql))

{
	
    echo "Meal is booked successfully";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);

?>