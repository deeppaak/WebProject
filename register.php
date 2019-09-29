<?php 
    $conn = new mysqli("localhost:3308", "root", "root", "hotel");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $username =  $_POST['username'];
    $password =  $_POST['password'];
    $email = $_POST['email'];
    
    $sql = "insert into login(username, email, password) values('$username', '$email', '$password')";

    if ($conn->query($sql)) {
        echo "<script>window.location = 'home.html';</script>";//Reg Success
    } else {
        echo "<script>javascript:history.go(-1);</script>";
    }

    $conn->close();
?>