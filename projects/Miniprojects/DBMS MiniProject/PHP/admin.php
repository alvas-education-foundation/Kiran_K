

<html>
    <head> 
    <meta charset="utf-8">
    <title>Log in</title>
        <link rel="stylesheet" type="text/css" href="lin.css">
        <link rel="stylesheet" href="common.css">
        <meta charset="utf-8"> 
    </head>
    <body>
        <div id="navigationbar">
           
            
        <div class="list">
            <ul>
                <li> <a href="index.php">Home</a></li>
                <div class="dropdown">
                        <li> <button class="dropbtn">Log in</button></li>
                    <div class="dropdown-content">
                        <a href="login.php">Log in as Admin</a> 
                       <a href="student.php">Log in as Student</a>
                            
                    </div>
                    </div>
                <li> <a href="aboutus.php">About</a></li>
                <li> <a href="contactus.php">Contact</a></li>
            </ul>
            </div>
       </div>
        
    <div class="form">
        
        <h1>Admin Log in</h1>
        <form  method="post" action="adminin.php">
            <div class="inputbox">
                <label value="Admin Id">Admin Id </label><br />
                <input type="text" name="firstfield" id="firstfield"><br />
            </div>
            <div class="inputbox">
                <label value="password">Password </label>
                <br>
                <input type="password" name="passwordfield" id="passwordfield"><br><br>
            
            <input type="submit" name="submit" value="submit"><br>
                <div class='a'>
                <a href="#">Forgot password?</a>
                </div>
            </div>
        </form>
    </div>
    </body>
</html>
