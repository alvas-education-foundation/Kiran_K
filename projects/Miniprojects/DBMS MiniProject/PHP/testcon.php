

<?php
session_start();
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
if(isset($_POST['submit1']))
{
    $rs="select Pid from passenger where Fname='".$fname."' and Lname='".$lname."'";
    $result=mysqli_query($conn,$rs);
    $row = mysqli_fetch_assoc($result);
    if($row==FALSE)
    {
        echo "<script> alert('Entry not present!')
        window.location.href='test.php'</script>";
    }
    else
    {
        $str=$row['Pid'];
        //   echo $str;
        echo "<script> alert('Pid is $str')
        window.location.href='nextpage.php'</script>";
        $str=$row['Pid'];
        echo $str;
}
}

if(!empty($fname)&&!empty($lname))
{
  if(isset($_POST['submit2']))
  {
      $rs="call myproc('".$fname."','".$lname."')";
        $result=mysqli_query($conn,$rs);
        $row = mysqli_fetch_assoc($result);
        if($row==FALSE)
        {
            echo "<script> alert('Entry not present!')
            window.location.href='test.php'</script>";
        }
        else
        {
            while(!empty($row))
            {
            
       
                $str1=$row['Passid'];
                while($row1=mysqli_fetch_array($result))
                {
                    $str2=$row1['Passid'];
                }
        //   echo $str;
                echo "<script> alert('Pass ID is $str1 and Pid is $str2')
                window.location.href='nextpage.php'</script>";
        
            }
        }
  }  
}
else
{
   echo "<script> alert('Enter the both fields!!!!!!')
            window.location.href='test.php'</script>";
}



    

?>
