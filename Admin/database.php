<?php
session_start();
include_once('db.php');

if(!isset($_SESSION['email']))
{
	header("location: index.php");
}

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
    <link href="../B_v5.1/Bootstrap-5.1.3/CSS/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="" type="image/jpg" sizes="32x32">
    <title>Database</title>
  </head>
  <body>
    <style>
      /*------- Styling--------------------*/
      th{font-size: 12px;}
      td{font-size: 12px;}
      .status{font-weight: bold;}
      .nav-li-a{color: white; text-decoration: none; border: 1px solid transparent; padding: 10px 20px; border-radius: 20px; font-size: 20px;}
      .nav-li-a:hover{color: white; border-color: white;}
      .nav-li{padding: 5px;}
      .nav-color{background-color: #4267B2;}
      .nav-li-a:active {background-color: white; color: #4267B2;}
      #F{border: none; border-radius: 30px;}
    </style>
    <!----------------------------------------------------------------------------------------------------------------->
    <!--Start Coding-->

     <?php
      $user = $_SESSION['email'];
      $select = "SELECT * FROM admin WHERE email='$user'";
      $q = mysqli_query($conn, $select);
      $row = mysqli_fetch_array($q);

      $user_id = $row['id'];
      $name = $row['name'];

      
    ?>


    <nav class="navbar navbar-expand-lg navbar-light fixed-top nav-color"> 
      <div class="container-fluid">    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li title="Logout" class="nav-item nav-li"><a class="nav-li-a" href='logout.php?<?php echo "id=$user_id"?>'><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>               
              </ul>
            </div>
      </div>
    </nav>
    

    <div class="container-fluid" style="margin-top: 60px;">
        <?php
            $select = "SELECT * FROM users ORDER BY 1 DESC";
            $query = mysqli_query($conn, $select);
            if($row=mysqli_num_rows($query)>0)
            {
                echo'<table class="table table-hover table-sm table-bordered" style="text-align:center;">';
                    echo'<thead class="table-dark">';
                        echo'<tr>';
                            echo'<th scope="col">Id</th>';
                            echo'<th scope="col">Name</th>';
                            echo'<th scope="col">Email</th>';
                            echo'<th scope="col">Department</th>';
                            echo'<th scope="col">Task</th>';
                            echo'<th scope="col">Task Progress</th>';
                            echo'<th scope="col">Update Task</th>';
                            echo'</tr>';
                        echo'</thead>';
                    echo'<tbody>';

                    while($row = mysqli_fetch_assoc($query))
                    {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $department = $row['department'];
                        $task = $row['the_task'];
                        $task_progress = $row['task_progress'];

                        $update = '<a href="update_task.php?update_id='.$id.'">
                        <button type="submit" class="btn btn-success btn-sm data-bs-toggle="modal" data-bs-target="#exampleModal"">
                          Update Task
                        </button></a>';

                        echo'<tr>';
                            echo'<td class="align-middle">'.$id.'</td>';
                            echo'<td class="align-middle">'.$name.'</td>';
                            echo'<td class="align-middle">'.$email.'</td>';
                            echo'<td class="align-middle">'.$department.'</td>';
                            echo'<td class="align-middle">'.$task.'</td>';
                            echo'<td class="align-middle">'.$task_progress.'</td>';
                            echo'<td class="align-middle">'.$update.'</td>';
                        echo'</tr>';
                    }
            }
        ?>
    </div>
    <!----------------------------------------------------------------------------------------------------------------->
    <script src="../B_v5.1/Bootstrap-5.1.3/JS/bootstrap.bundle.min.js"></script> <!--Bootstarp.js CDN File With Popper.js CDN File-->
  </body>
</html>
