<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$mesg=htmlspecialchars($_POST['comment1']);

if(!empty($fname) || !empty($lname) || !empty($email) || !empty($phone) || !empty($mesg))
{
  $sql = "INSERT INTO contactus (Fname,Lname,Mailid,Phone,Feedback)
VALUES ('$fname','$lname','$email','$phone','$mesg')";

if (mysqli_query($conn, $sql)) {
   echo "<script> alert('Logged in  successfully!')
    window.location.href='index.php'</script>";
} else {
    echo "<script type='text/javascript'>alert('failed!')</script>";
}
  
}



else{
     echo "<script type='text/javascript'>alert('All fields are required!!!!!!!!')</script>";
}


?>