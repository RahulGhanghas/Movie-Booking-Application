	<?php

$link = mysqli_connect("localhost", "root", "", "tickets");
 
// Check connection

if($link === false)
{
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$has_error = false;
$error_message = array('firstname'=>'' , 'password'=>'' , 'phone'=>''); 

if($_SERVER['REQUEST_METHOD']=='POST')

{

if (empty($_POST['firstname']))  
{ 
 
$has_error = true; 
$error_message['firstname'] = 'firstname must not be blank'; 

}  

else  
{

if (strlen($_POST['firstname']) < 3) 
{ 

$has_error = true; 
$error_message['firstname'] = 'firstname has to be atleast 3 charecter long'; 

} 

}

if (empty($_POST['lastname']))  
{ 
 
$has_error = true; 
$error_message['lastname'] = 'lastname must not be blank'; 

}  

else  
{

if (strlen($_POST['lastname']) < 3) 

{ 

$has_error = true; 
$error_message['lastname'] = 'lastname has to be atleast 3 charecter long'; 

} 

}  

if(!empty($_POST['phone']) && !is_numeric($_POST['phone'])) 

{ 

$has_error = true; 
$error_message['phone'] = 'A phone number must be numeric'; 

} 

if(!empty($_POST['tickets']) && !is_numeric($_POST['tickets'])) 

{ 

$has_error = true; 
$error_message['tickets'] = 'Number of tickets given must be numeric'; 

} 

}


$first_name = mysqli_real_escape_string($link, $_POST['firstname']);

$last_name = mysqli_real_escape_string($link, $_POST['lastname']);

$email_address = mysqli_real_escape_string($link, $_POST['email']);

$no_of_tickets = mysqli_real_escape_string($link, $_POST['tickets']);

$phone_number = mysqli_real_escape_string($link, $_POST['phone']);
 
// attempt insert query execution

$sql = "INSERT INTO tickets (first_name, last_name, email_address, no_of_tickets, phone_number) VALUES ('$first_name', '$last_name', '$email_address', $no_of_tickets, $phone_number)";

if(mysqli_query($link, $sql))

{
	
    echo "<br>Ticket is booked successfully";
    echo "<br>"; 
    echo "<br>"; 


echo "Firstname: ".$_POST['firstname']; 
echo "<br>"; 
echo "<br>"; 


echo "Lastname: ".$_POST['lastname']; 
echo "<br>"; 
echo "<br>"; 


echo "Your Email - Address:  ".$_POST['email']; 
echo "<br>"; 
echo "<br>"; 


echo "Number of tickets: ".$_POST['tickets']; 
echo "<br>"; 
echo "<br>"; 


echo "Your Phone Number: ".$_POST['phone']; 
echo "<br>"; 
echo "<br>"; 
	

} 

else

{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}
 
// close connection

mysqli_close($link);

?>