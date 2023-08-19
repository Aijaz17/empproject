<?php

include 'C:\xampp\htdocs\emproject\dbconn.php';



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
  


    <h2 class="text-center p-4 bg-dark text-light">Search Employee TO Delete</h2>


    <div class="container w-50 mt-5">
        <form action="" method="post">


        <div class="mb-3">
            <label class="form-label" for="">
            employee Id
            </label>
          <input class="form-control" name="id" type="text" value="" id="">
        </div>


        <div class="mb-3">
            <label class="form-label" for="">
            employee name:
            </label>
          <input class="form-control" name="name" type="text" value="" id="">
        </div>
      
        <div class="mb-3">
            <input type="submit" value="Search" name="srch" class="btn btn-dark">
        </div>
     


        </form>
    </div>



    <?php


if(isset($_POST['srch']))
{

    $name=$_POST['name'];
    $id=$_POST['id'];

    $select="SELECT * FROM `employee` WHERE `name`='$name' AND `id`='$id'";

    $run=mysqli_query($conn , $select);

    $data=mysqli_fetch_array($run);

    if($data<=0)
    {
    
      header('location:delemp.php');


    }


    ?>


<div class="table-responsive">

    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">image</th>
                <th scope="col">Id</th>
                <th scope="col">name</th>
                <th scope="col">age</th>
                <th scope="col">conttact</th>
                <th scope="col">CITY</th>
                <th scope="col">gender</th>
                <th>Action</th>
            </tr>

        </thead>
        <tbody>

            <tr class="">

               <td> <img src="./<?php echo $data['image'] ?>" alt="" width="40px" height="40px"></td>
                <td scope="row"><?php  echo  $data['id']; ?></td>
                <td scope="row"><?php  echo $data['name']; ?></td>
                <td scope="row"><?php  echo $data['age']; ?></td>
                <td scope="row"><?php  echo $data['contact']; ?></td>
                <td scope="row"><?php echo $data['city']; ?></td>
                <td scope="row"><?php echo  $data['gender']; ?></td>
                <td><a href="deletequery.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm " >Delete</a></td>
                
            </tr>
           
        </tbody>

    </table>
</div>


 <?php



}



?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>