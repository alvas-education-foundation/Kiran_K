<html>
    <head>
        <link rel="stylesheet" href="employee.css">
        
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
        
        <div class="form">
       <form method="post" action="employeeconn.php">
        
            <label>Enter the Emloyee name</label><br><br>
            <input type="text" name="ename" id="ename" required autocomplete="off"><br><br>
        
           <label>Choose the Bus Id</label><br><br>
            <select name="busid">
                    <option value="M1">M1</option>
                    <option value="B3">B3</option>
                    <option value="C3">C3</option>
                    <option value="N2">N2</option>
                    <option value="A1">A1</option>
                    <option value="A2">A2</option>
                    <option value="C5">C5</option>
                    <option value="F4">F4</option>
                    <option value="A4">A4</option>
           </select><br><br>
        
            
            <label value="Buses">Choose the Route No</label><br><br>
                <select name="routeno">
                    <option value="68">68</option>
                    <option value="65">65</option>
                    <option value="60">60</option>
                    <option value="56">56</option>
                    <option value="31">31</option>
                    <option value="62">62</option>
                    <option value="80">80</option>
                    <option value="38">38</option>
                    <option value="60">60</option>
           </select><br><br>
        
            <input type="submit" name="submit"><br><br>
    
        </form>
            <form method="post" action="refresh1.php">
                <div class="button">
                <input type="submit" value="See All" id="refresh">
                </div>
            </form>
            </div>
    </body>
    

</html>