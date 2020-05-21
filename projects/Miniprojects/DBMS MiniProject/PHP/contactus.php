<html>
    <head> 
        <link rel="stylesheet" href="style.css">
                <link rel="stylesheet" href="common.css">
        <link rel="stylesheet" href="contactus.css">
        

    </head>
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
    <body>
        <form action="contactuscon1.php" method="post">
            <div class="feedback">
                <label value="Firstname">First name</label><br><br>
                <input type="text" name="fname" id="fname" autocomplete="off"><br><br>
                
                <label value="lastnasme">Last name</label><br><br>
                <input type="text" name="lname" id="lname" autocomplete="off"><br><br>
                
                <label value="Email">Email</label><br><br>
                <input type="text" name="email" id="email" autocomplete="off"><br><br>
                
                <label value="phone">Phone No.</label><br><br>
                <input type="text" name="phone" id="phone" autocomplete="off"><br><br>
                
                
                <label value="Message">Message</label><br><br>
                <textarea name="comment1" id="comment1" autocomplete="off"></textarea><br><br>
                
                <input type="submit" name="submit" id="submit" autocomplete="off"><br>                               
            </div>
        </form>
    </body>
</html>