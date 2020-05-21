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
$result = $conn->query("SELECT * FROM contactus");
if($result->num_rows == 0) {
     // row not found, do stuff...
    echo "<script> alert('Empty table')
    window.location.href='home.php'</script>";
} else {
          echo "<html>
          <head>
            <link rel='stylesheet' href='table.css'>
          </head>
 <center>         
<body><table id='log'>
<tr>
<th>First Name</th>
<th>Last name</th>
<th>Mail Id</th>
<th>Phone No</th>
<th>Feedback</th>


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
         echo "<td>".$row[4]."</td><br>";


    echo "</tr></body>
    </html> ";

}
    }
        // header("location:studentresult.php");
    
}


?>