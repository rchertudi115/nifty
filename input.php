<?php

$servername = "localhost";
$username = "simplyli_contact";
$password = "tc_#GX/P:Z8HF5k&";
$dbname = "simplyli_tours";

$email = Trim(stripslashes($_POST['email'])); 
$toEmail = "rchertudi@gmail.com";
$Subject = "CAS 222 Contact Form Test";

$name = Trim(stripslashes($_POST['name']));
$date = Trim(stripslashes($_POST['date']));
$tours = Trim(stripslashes(implode($_POST['tours'])));
$comments = Trim(stripslashes($_POST['comments']));

$Message = "";
$Message .= "Name: ";
$Message .= $name;
$Message .= "\n";
$Message .= "Date of Trip Desired: ";
$Message .= $date;
$Message .= "Tours: ";
$Message .= $tours;
$Message .= "\n";
$Message .= $comments;
$Message .= "\n";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO contacts (name, email, date, tours, comments)
VALUES ('$name', '$email', '$date', '$tours', '$comments')";

if ($conn->query($sql) === TRUE) {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=success.php\">";

} else {
   print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
}

$conn->close();

?>