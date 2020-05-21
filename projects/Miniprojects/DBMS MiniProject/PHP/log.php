<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="select * from users_log";

echo "<html>
<head>
    <link rel='stylesheet' href='table.css'>
</head>

<center>
<body><table border='1' id='log'>
<tr>
<th>P Id</th>
<th>Time Stamp</th>
</tr>
</center>";

$result=mysqli_query($conn,$sql);
if($result)
{
    while($row=mysqli_fetch_array($result))
    {
    
        echo "<tr>";
        echo "<td>".$row[0]."</td><br>";
        echo "<td>".$row[1]."</td><br>";
        echo "</tr></body>
        </html> ";
    }
}

?>