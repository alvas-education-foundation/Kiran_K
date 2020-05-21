<?php 


$host="localhost";
$user="root";
$password="";
$db="bus";


$con=mysqli_connect($host,$user,$password,$db);
if(!$con)
    {
        die("connection failer".mysqli_error());
    }
    if(isset($_POST['submit'])) 
    {
        $uname=$_REQUEST['firstfield'];
        $pass=$_REQUEST['passwordfield'];
        $query="select * from admin_log_in where Adminid='$uname' AND Password='$pass'limit 1";
    $res=mysqli_query($con,$query) or die("Incorrect password/USERNAME".mysqli_error($con));
        $row=mysqli_fetch_array($res);
        if($row[0]==$uname && $row[1]==$pass)
        {
            echo "<script> alert('Logged in  successfully!')
    window.location.href='adminpage.php'</script>";
        }
        else
        {
            echo "<script> alert('Invalid Username/Password!!!!!!!!!')
    window.location.href='admin.php'</script>";
             die("Incorrect password/USERNAME".mysqli_error($con));
        }
     }
?>