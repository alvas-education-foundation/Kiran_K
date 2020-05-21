<?php

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$result = $conn->query("SELECT Fname,Lname,Age,Destination FROM passenger p,Buspass bp,route r  where p.Fname='".$fname."' and p.Lname='".$lname."' and p.Pid=bp.Pid and bp.Routeno=r.Routeno");

if($result->num_rows == 0) {
     // row not found, do stuff...
    echo "<script> alert('No details available')
    window.location.href='test.php'</script>";
}
else 
{
          echo "<html>
          <head>
            <link rel='stylesheet' href='table.css'>
          </head>
          
 <center>         
<body><table id='log'>
<tr>
<th>Fname</th>
<th>Lname</th>
<th>Age</th>
<th>Destination</th>
</tr></center>"
              ;
    if($result)
    { 
        while($row=mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td>".$row[0]."</td><br>";
        echo "<td>".$row[1]."</td><br>";
        echo "<td>".$row[2]."</td><br>";
        echo "<td>".$row[3]."</td><br>";

        echo "</tr></body>
        </html> ";

        }
    }
        // header("location:studentresult.php");
    
}

?>