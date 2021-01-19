<?php

    //DB Connection variaables
    $HOST_NAME = "localhost";
    $USER_NAME = "root";
    $PASSWORD = "";
    $DATABASE = "exam_auth_db";

    //Connect to DB
    $con = mysqli_connect($HOST_NAME, $USER_NAME, $PASSWORD, $DATABASE );

    session_start();

    $mail = $_POST["email"];
    $uuid = $_POST["uuid"];

    if(isset($mail) && isset($uuid)){
        $email = mysqli_real_escape_string($con, $mail);
        $auth_code = mysqli_real_escape_string($con, $uuid);

        $sql = "SELECT * FROM student WHERE email = '" .$email. "' AND auth_code = '" .$auth_code. "'";
        $result = mysqli_query($con, $sql);
        $rows = mysqli_num_rows($result);

        if($rows > 0){
            $data = mysqli_fetch_array($result);
            $_SESSION["auth_code"] = $data["auth_code"];
            echo "1";
        }
    }

?>