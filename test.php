<?php 

    if($_SERVER['REQUEST_METHOD'] === "POST"){
            echo "Hello from Psot";
    }

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <form action="" method="">
        <input type="text" name="user" class="form-control">
        <input type="submit" name="send" class="form-control btn btn-primary">
    </form>
</body>
</html>