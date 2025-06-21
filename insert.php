<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "login");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        
        // Taking all 4 values from the form data(input)
        $first_name = $_REQUEST['first_name'];
        $gender = $_REQUEST['gender'];
        $pass = $_REQUEST['password'];
        $email = $_REQUEST['email'];
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO users VALUES ('$first_name', 
            '$gender','$email','$pass')";
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>"; 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>

</html>
