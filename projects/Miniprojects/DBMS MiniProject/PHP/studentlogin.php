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
   
       $passid=$_POST['passid'];

   

$result = $conn->query("SELECT * FROM buspass WHERE Passid = '$passid'");
if($result->num_rows == 0) {
     // row not found, do stuff...
   echo "<script> alert('Not Regiserd!!!!!!!!!!!'.mysqli_error().)'
    window.location.href='student.php'</script>";

} else {
          echo "<html>
          <head>
          <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <link rel='stylesheet' href='studenttable.css'>
    </head>
 <center>         
<body><table  id='details'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Pass ID</th>
<th>P Id</th>
<th>Valid from</th>
<th>Valid To</th>
<th>Route NO</th>
</tr></center>"
              ;
    if($result){ 
while($row=mysqli_fetch_array($result))
{
    $result1 = $conn->query("SELECT * FROM passenger WHERE Pid = '$row[1]'");
while($row1=mysqli_fetch_array($result1))
{

echo "<tr>";
    echo "<td>".$row1[2]."</td><br>";
    echo "<td>".$row1[3]."</td><br>";
echo "<td>".$row[0]."</td><br>";
echo "<td>".$row[1]."</td><br>";
echo "<td>".$row[2]."</td><br>";
echo "<td>".$row[3]."</td><br>";
echo "<td>".$row[4]."</td><br>";

echo "</tr>
<a href='student.php' class='btn btn-info btn-lg'>
          <span class='glyphicon glyphicon-log-out'></span> Log out
        </a>
</body>
</html> ";
}
}
    }
        // header("location:studentresult.php");
    
}


?>