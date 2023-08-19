<?php
include 'C:\xampp\htdocs\emproject\dbconn.php';

$gender="";

if(isset($_POST['addemp']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $contact=$_POST['contact'];
    $city=$_POST['city'];
    $salary=$_POST['salary'];
    $gender=$_POST['gender'];
    
    $image=$_FILES['picture']['name'];

    $folder="Images/";

    $tmpname=$_FILES['picture']['tmp_name'];
    $target=$folder.basename($_FILES['picture']['name']);
    move_uploaded_file($tmpname , $target);

    $ins="INSERT INTO `employee`(`name`, `age`, `contact`, `city`, `salary`, `gender`, `image`) VALUES ('$name','$age','$contact','$city','$salary','$gender','$target')";


    $run=mysqli_query($conn , $ins);

    if($run)
    {
        header('location:admindashboard.php');
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


<h2 class="text-center p-4 bg-dark text-light">Add employee </h2>


<div class="container">

<form action="" method="post" enctype="multipart/form-data"> 

<div class="mb-3">

  <label for="" class="form-label">Name</label>
  <input type="text" class="form-control" name="name" id=""placeholder="name .. " required>

</div>

<div class="mb-3">

  <label for="" class="form-label">age</label>
  <input type="number" class="form-control" name="age" id=""placeholder="age " required>

</div>

<div class="mb-3">

  <label for="" class="form-label">Contact</label>
  <input type="number" class="form-control" name="contact" id=""placeholder="contact .. ">

</div>

<div class="mb-3">

  <label for="" class="form-label">City</label>
  <input type="text" class="form-control" name="city" id="" placeholder="city .. ">

</div>

<div class="mb-3">

  <label for="" class="form-label">Salary</label>
  <input type="number" class="form-control" name="salary" id="" placeholder="salary .. ">

</div>

<div class="mb-3">

    <label class="form-check-label" for="">Gender</label>
        <input class="form-check-input" type="radio" name="gender" value="male" id="">Male
        <input class="form-check-input" type="radio" name="gender" value="female" id="">Female

    </div>



<div class="mb-3">

  <input type="file" class="form-control w-50" name="picture" id=""placeholder="">

</div>

<div class="mb-3">

<input type="submit" value="Add Employee" name="addemp" class="btn btn-sm  btn-dark">

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