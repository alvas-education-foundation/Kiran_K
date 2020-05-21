<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus";

$type=$_POST['dropdown'];
$fname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blood=$_POST['blood'];

 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="insert into passenger(Type,Fname,Lname,Age,Gender,Bloodtag)
VALUES ('$type','$fname','$lastname','$age','$gender','$blood')";

$result=mysqli_query($conn,$sql);
 if($result){
    //header('Location: studentinsert.php');
    echo "<script> alert('submitted successfully!')
    window.location.href='Passengerinsert.php'</script>";
 }
else{
  echo "<script> alert('submit Failed:'.mysqli_error().)'
    window.location.href='test.php'</script>";
    die("connection failer".mysqli_error($conn));
}

mysqli_close($conn);

?>