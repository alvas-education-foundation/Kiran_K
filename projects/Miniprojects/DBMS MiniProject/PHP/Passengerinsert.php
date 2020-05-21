
<html>
    <head> 
        <link rel="stylesheet" href="passenger1.css">
    </head>

    <body>
        <div class="sidenav">
            
            <a href="adminpage.php">Home</a>
            <a href="Passengerinsert.php">Register</a>
            <a href="test.php">Search</a>
            <a href="details1.php">Get Details</a>
            <a href="nextpage.php">Bus Pass</a>
            <a href="Employeeregistration.php">Employee</a>
            <a href="log.php">Log Details</a>
            <a href="review.php">Review</a>
            <a href="index.php">Log out</a>
           
        </div>
        
        <div class="head">
                    <h1>Registration </h1>
                </div>
        
        <form method="POST" action="passengercon.php">
       <div class="inputbox1">
                
                <label> Choose the type</label><br>
                    <select name="dropdown">
                        <option value="ST" >ST</option>
                        <option value="FL">FL</option>
                    </select><br><br>
                
                <label value="Firstname">Enter the First name</label><br><br>
                <input type="text" name="firstname" id="firstname" autocomplete="off"  ><br><br>
           
                <label value="Lastname">Enter the Last name </label><br><br>
                <input type="text" name="lastname" id="lastname" autocomplete="off"  ><br><br>
           
                <label value="Age">Enter the Age</label><br><br>
                <input type="text" name="age" id="age" ><br><br>
           
                <label value="Secondname">Gender </label><br><br>
                <input type="radio" name="gender" value="male" id=gender > Male<br>
                <input type="radio" name="gender" value="female" id=gender > Female<br><br>
                
                <label value="Streetaddr">Enter the Blood Group</label><br>
                <select name="blood" id="blood">
                    <option value="O+">O+</option>
                     <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>

                </select><br><br>
           
                <input type="submit" name="submit" id="submit" value="Submit" ><br><br>
          
                    </div>         
        
        </form>
         <div class="refresh">
                    <form action="refresh.php" method="POST"> 
            <input type="submit" name="refresh" id="refresh" value="Status" >
            </form>
            
            </div>
        

        
          
        
    </body>



</html>


