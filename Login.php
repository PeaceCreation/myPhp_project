<?php 
    // Start Session
    session_start();
    // End Session
    // get connection
    require './connection.php';
    @$email = $_POST['email'];
    @$password = $_POST['password'];
   if($_SERVER['REQUEST_METHOD'] === "POST"){
    //   $sql = ;
      $result = mysqli_query($connection, "SELECT email, password FROM users  WHERE email = '$email' AND password = '$password'");
      $row = mysqli_fetch_array($result);
      $_SESSION['e'] = $row['email'];
      $_SESSION['p'] = $row['password'];
      if(isset($_POST['login'])){
        if($email == $row['email'] && $password == $row['password']){
            header("Location: Profile.php");
      }
      else{
        echo "You are not member";
        header("Location: Login.php");
      }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="container">

            <div class="login">
                <form action="" method="post"  enctype="multipart/form-data">
                        <div style="text-align:center; padding-bottom: 20px;">
                        <img style="width:50px; height:50px; border-radius:50%; text-align:center;" class="gallery" src="./gallery/<?php echo$_SESSION['image']; ?>" alt="">
                        <h4 class="pt-3"><?php echo $_SESSION['name']; ?></h4>
                        </div>
                        <input type="email" name="email" required placeholder="Enter your email " class="form-control my-2"> 
                        <input type="password" name="password" required placeholder="Enter your password " class="form-control my-2"> 
                        <div class="d-block mt-3">
                            <input type="submit" value="Log In" name="login" class="form-control my-2 btn btn-primary w-50 d-block">
                            <a href="Signin.php" class="d-block">Create account</a>
                        </div>
                </form>
            </div>
    </div>
</body>
</html>