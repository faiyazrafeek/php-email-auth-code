<?php
    session_start();

    if(!isset($_SESSION["auth_code"])){
        header("Location: index.html");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exams </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    <div class="container my-5">
        <div class="display-6 mb-5">Welcome to Exams page</div>

        <h5><a href="logout.php">Logout</a></h5>
    </div>
</body>
</html>