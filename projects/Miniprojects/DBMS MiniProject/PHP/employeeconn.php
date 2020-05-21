<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

$busid=$_POST['busid'];
$ename=$_POST['ename'];
$routeno=$_POST['routeno'];

    $sql="INSERT INTO bus (Busid,Dname,Routeno) VALUES ('$busid', '$ename', '$routeno')";

$result=mysqli_query($conn,$sql);

    if($result == TRUE)
    {
        echo "<script> alert('submitted successfully!')
        window.location.href='Employeeregistration.php'</script>";
    }
else{
 die("connection failer".mysqli_error($conn));
}
?>
   