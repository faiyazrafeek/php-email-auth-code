<?php

    //DB Connection variaables
    $HOST_NAME = "localhost";
    $USER_NAME = "root";
    $PASSWORD = "";
    $DATABASE = "exam_auth_db";

    session_start();

    $to_mail = $_POST["email"];
    $uuid = $_POST["uuid"];

    //Connect to DB
    $con = mysqli_connect($HOST_NAME, $USER_NAME, $PASSWORD, $DATABASE );

    $sql = "INSERT INTO student (email, auth_code) VALUES('".$to_mail."', '".$uuid."') ";

    



    $to_mail = $_POST["email"];
    $uuid = $_POST["uuid"];
    $to = $to_mail;    
    $subject = "Exam Authentication Code";
    
    $message = "<h3> Code : $uuid</h3> ";
    $message .= "<b> Dont share this code with anyone.</b> ";
    
    
    $header = "From:exams@uni.ac.lk \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    
    $retval = mail ($to,$subject,$message,$header);
    mysqli_query($con, $sql);
    
    echo  ($retval == true) ? "1" : "-1";
?>