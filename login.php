<?php

include 'dbconn.php';

session_start();

if(isset($_SESSION['id']))
{

  header('location:Admin/admindashboard.php');

}



if(isset($_POST['login']))
{
  
  $username=$_POST['username'];
  $password=$_POST['password'];

  $select="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
  $run=mysqli_query($conn ,$select);

  
  $rows=mysqli_num_rows($run);

  if($rows<=0)
  {
      ?>

             <script> 

                        alert("Username or password are wrong");
                        window.open('login.php' ,'_self');

              </script>  

      <?php
  }
  
  else

   {

      $data=mysqli_fetch_array($run);

      $id=$data['id'];

      $_SESSION['id']=$id;

      header('location:Admin/admindashboard.php');

   }
   
  }

?>

<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>


<h2 class="text-center p-4 bg-dark text-light">Admin Login</h2>

<div class="container w-50 mt-5">
        <form action="" method="post">


        <div class="mb-3">
            <label class="form-label" for="">
            username
            </label>
          <input class="form-control" type="text"  name="username" id="">
        </div>
        <div class="mb-3">
            <label class="form-label" for="">
          password
            </label>
          <input class="form-control" type="text" name="password"  id="">
        </div>

        <div class="mb-3">
            <input type="submit" value="Login" name="login" class="btn btn-dark">
        </div>
     


        </form>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>