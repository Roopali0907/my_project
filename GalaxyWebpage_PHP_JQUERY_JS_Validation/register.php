<?php
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Gender = $_POST['Gender'];
    $Mobile_Number = $_POST['Mobile Number'];
    $Address = $_POST['Address'];
    $Disease = $_POST['Disease'];

    $conn = new mysqli('localhost','root','','test3');
    if($conn->connect_error){
        die('connection failed :' .$conn->connect_error);
    } else{
        $stmt = $conn->prepare("insert into registration( Username , Email ,Password ,Gender,Mobile_Number,Address,Disease) values(?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssiss" , $username,$Email,$Password, $Gender,$Mobile_Number, $Address,$Disease);
        $stmt->execute();
        echo"Registration successfully!!!!";
        $stmt->close();
        $conn->close();
    }

?>