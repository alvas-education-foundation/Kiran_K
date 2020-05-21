<html>
<head>
    
    </head>
    <link rel="stylesheet" href="std.css">
    <link rel="stylesheet" href="common.css">
    <body>
        <div id="navigationbar">
           
            
        <div class="list">
            <ul>
                <li> <a href="index.php">Home</a></li>
                
                    <div class="dropdown">
                        <li> <button class="dropbtn">Log in</button></li>
                    <div class="dropdown-content">
                        <a href="admin.php">Log in as Admin</a> 
                       <a href="student.php">Log in as Student</a>
                            
                    </div>
                    </div>
                <li> <a href="aboutus.php">About</a></li>
                <li> <a href="contactus.php">Contact</a></li>
                
            </ul>
            </div>
       </div>
        <div class="form">
            <form  method="post" action="studentlogin.php">
                
            <h1>Student Log in</h1>
        
            <div class="inputbox">
                <label value="usn">Pass Id</label><br><br>
                <input type="text" name="passid" id="passid"><br>
            </div>
        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="submit">
        </form>
            
        
            </div>
    
    
    </body>
    
</html>