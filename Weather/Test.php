<?php 


    $con= mysqli_connect("mysql.stackcp.com","users_db-313439571a","Arsenal123","users_db-313439571a","54936");

    $query = "UPDATE users SET email= 'arsenal@mail.com' WHERE id =1 LIMIT 1";

    mysqli_query($con, $query);

    $query = "SELECT * FROM users";

    if ($result = mysqli_query($con, $query)) {
        
        $row = mysqli_fetch_array($result);
        
        echo "Your email is ".$row[1]." and your password is ".$row[2];
        
    }
?>