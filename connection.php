<?php      
    $host = "localhost";  
    $user = "id22371721_root";  
    $password = 'Akshay@123#';  
    $db_name = "id22371721_userdatabase";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  