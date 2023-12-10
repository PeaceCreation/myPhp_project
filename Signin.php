<?php 
   
   require './connection.php';
    // Start Session 
    session_start();

   if($connection){
    if(isset($_POST['send'])){
        $username = htmlspecialchars($_POST['username']);
        $fn = htmlspecialchars($_POST['user']);
        $password = htmlspecialchars($_POST['password']);
        $email = htmlspecialchars($_POST['email']);
        @$image = htmlspecialchars($_FILES['image']['name']);
        $timage = $_FILES['image']['tmp_name'];
        move_uploaded_file($timage, './gallery/'.$image);
            $_SESSION['image'] = $image;
            $_SESSION['name'] = $username;
            $_SESSION['pass'] = $password;
        if(!empty($username)){
            // Star e Query 
            $sql = "INSERT INTO users(name, password,image, email) VALUES ('$username', '$password','$image', '$email')";
            $sqls = "SELECT * FROM users";
            $result = mysqli_query($connection, $sql);
                header("Location: Login.php");
            // // $row = mysqli_fetch_array($result);
            // while($row = mysqli_fetch_array($result)){
            //     echo "your name is " . $row['name'] ."<br>";
            //     $_SESSION['image'] = $row['image'];
            //     $_SESSION['name'] = $row['name'];
            // }
                
            

        }else{
            header("Location: Signin.php");
        }
    }

}else{
    echo "Faild To Connect";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignIn</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">
            <div class="singin">
                <form action="" method="post"  enctype="multipart/form-data">
                    <input type="file" name="image" required placeholder="Choose an Image" class="form-control my-2">
                    <input type="text" name="username" required placeholder="Fisrt Name " class="form-control my-2">
                    <input type="text" name="user" required placeholder="Last Name "  class="form-control my-2">
                    <input type="text" name="email" required placeholder="Email"  class="form-control my-2">
                    <input type="password" name="password" required placeholder="Password " class="form-control my-2">
                    <input type="password" name="pass" required placeholder="Confirm Password " class="form-control my-2">
                    <input type="submit" name="send"  class="form-control my-2 btn btn-primary w-50">
                </form>
            </div>

            
    </div>

    <span class="text-center">
        
    </span>
</body>
</html>