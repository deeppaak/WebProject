<?php
    // Check connection
    $conn = new mysqli("localhost:3308", "root", "root", "hotel");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $username =  $_POST['username'];
    $password =  $_POST['password'];
    
    // Check user exists for usernmae & password given
    $sql = "select * from login where username='$username' and password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<script>window.location = 'home.html';</script>";//Login Success
    } else {
        echo "<script>javascript:history.go(-1);</script>";
    }

    $conn->close();
?>