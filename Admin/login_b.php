<?php
session_start();
include_once('db.php');
?>
<?php
        if(isset($_POST['submit']))
        {
            $email = htmlentities(mysqli_real_escape_string($conn ,$_POST['email']));
            $password = htmlentities(mysqli_real_escape_string($conn ,$_POST['password']));

            $select = "select * from admin where email='$email'";
            $q = mysqli_query($conn , $select);
            $check = mysqli_num_rows($q);
            if($check==1)
            {
                
                        $_SESSION['email'] = $email;
                        echo "<script>window.open('database.php', '_self')</script>";
                    }
                    else
                    {
                        echo"<script>alert('Your Email or Password is Incorrect')</script>";
                    }
            
        }
        ?>