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
    $pid=$_POST['pid'];
    $passid=round(microtime(true) * 1000);
    $validfrom=$_POST['validfrom'];
    $validto=$_POST['validto'];
    $routeno=$_POST['routeno'];


    $sql="INSERT INTO `buspass` (`Passid`, `Pid`, `Validfrom`, `Validto`, `Routeno`) VALUES ('$passid', '$pid', '$validfrom', '$validto', '$routeno')";
   
$result=mysqli_query($conn,$sql);
    if($result==TRUE)
    {
        echo "<script> alert('submitted successfully!')
        window.location.href='nextpage.php'</script>";
    }
else{
 die("connection failer".mysqli_error($conn));

   
}
?>