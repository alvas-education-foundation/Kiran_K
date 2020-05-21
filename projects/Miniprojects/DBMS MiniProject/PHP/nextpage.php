
<html>
<head>
    <link rel="stylesheet" href="nextpage1.css">
    </head>
    <title> </title>
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
        
        <form action="Buspasscon.php" method="post">
            <label value="Pid">Passenger Id</label><br><br>
                <input type="text" name="pid" id="pid" required autocomplete="off"><br><br>
        <label value="Valid From">Valid From</label><br><br>
                <input type="date" name="validfrom" id="validfrom" required autocomplete="off"><br><br>
        <label value="Valid To">Valid To</label><br><br>
                <input type="date" name="validto" id="validto" required autocomplete="off"><br><br>
            <label value="Buses">Choose the Routeno</label><br><br>
                <select name="routeno" id="routeno">
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
            <input type="submit" value="submit" name="submit">
            
        </form>
            </div>
    </body>


</html>