<?php      
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $con = mysqli_connect("localhost", "root", "", "login");
        
        // Check connection
        if($con === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
 
        $username = $_POST['email'];  
        $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from users where email = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  