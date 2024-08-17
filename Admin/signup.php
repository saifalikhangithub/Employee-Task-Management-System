<?php
include('db.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="this is description of the title write something about your webpage which is show on while some one search and browsing">
    <meta name="keywords" content="white, keywords, about, your, webpage, to, rank, your, website, on, google, search, results">
    <meta name="author" content="about you">
    <link rel="icon" href="" type="image/jpg" sizes="32x32">
    <title></title>
  </head>
  <body>
    <style>
    /*------- Styling--------------------*/
    </style>
    <!----------------------------------------------------------------------------------------------------------------->
    <!--Start Coding-->
     <div class="container col-sm-5 mt-5">
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <a href="login.php">Login</a>
            </form>
        </div>

        <?php
            if(isset($_POST['submit']))
            {
                $name = htmlentities(mysqli_real_escape_string($conn ,$_POST['name']));
                $email = htmlentities(mysqli_real_escape_string($conn ,$_POST['email']));
                $password = htmlentities(mysqli_real_escape_string($conn ,$_POST['password']));
                

                $check_email = "select * from admin where email='$email'";
                $run_email = mysqli_query($conn ,$check_email);
                $check = mysqli_num_rows($run_email);
                if($check > 0)
                {
                    echo "<script>alert('Your Entered Email is Already Exist, Please Use Another Email')</script>";
                    echo "<script>window.open('signup.php', '_self')</script>";
                    exit();
                }
            
                if(strlen($password) >= 3)
                {
                     
                    $insert = "insert into admin (name, email, password) values('$name','$email','$password')";
                    $query = mysqli_query($conn , $insert);
                    if($query)
                    {
                        echo "<script>alert('Congratulation $name, Your Account Created Successfully')</script>";
                        #echo "<script>window.open('login.php', '_self')</script>";
                    }
                    else
                    {
                        echo "<script>alert('Registration Failed, Please Try Again!')</script>";
                        echo "<script>window.open('signup.php', '_self')</script>";
                    }
                    exit();
                }

                else
                {
                    echo "<script>alert('Error')</script>";
                }
            }
        ?>

  </body>
</html>