<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bus";
    
        $con=mysqli_connect($servername,$username,$password,$dbname);
    
        if (mysqli_connect_errno())
        {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        $sql="select * from `passenger`";
        $result=mysqli_query($con,$sql);
        echo "
        <html>
        <head>
            <link rel='stylesheet' href='employee.css'>
            <link rel='stylesheet' href='table.css'>
        </head>
        <center>
<body>

<table  id='log'>
<tr>
<th>Id Type</th>
<th>P Id</th>
<th>First name</th>
<th>Last name</th>
<th>Age</th>
<th>Gender</th>
<th>Blood Group</th>
</tr></center>";
    

if($result){ 
while($row=mysqli_fetch_array($result))
{

$Type=$row['Type'];
$P_id=$row['Pid'];
$Fname=$row['Fname'];
$Lname=$row['Lname'];
$Age=$row['Age'];
$Gender=$row['Gender'];
$Blood_tag=$row['Bloodtag'];


echo "<tr>";
echo "<td>".$row['Type']."</td><br>";
echo "<td>".$row['Pid']."</td><br>";
echo "<td>".$row['Fname']."</td><br>";
echo "<td>".$row['Lname']."</td><br>";
echo "<td>".$row['Age']."</td><br>";
echo "<td>".$row['Gender']."</td><br>";
echo "<td>".$row['Bloodtag']."</td><br>";
echo "</tr></body>
</html> ";
}
}

?>