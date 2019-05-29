<?php

$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_POST['firstname']);
$last_name = mysqli_real_escape_string($link, $_POST['lastname']);
$email_address = mysqli_real_escape_string($link, $_POST['email']);
$no_of_tickets = mysqli_real_escape_string($link, $_POST['tickets']);
$phone_number = mysqli_real_escape_string($link, $_POST['phone']);
 
// attempt insert query execution
$sql = "INSERT INTO tickets (first_name, last_name, email_address, no_of_tickets, phone_number) VALUES ('$first_name', '$last_name', '$email_address', $no_of_tickets, $phone_number)";
if(mysqli_query($link, $sql)){
    echo "Ticket is booked successfully";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>