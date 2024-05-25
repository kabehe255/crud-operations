<?php
    include "connection.php";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone_no = $_POST['phone_no'];
        $q = " INSERT INTO `student` (`name`, `email`, `phone_no`) VALUES ('$name', '$email', '$phone_no') ";

        $query = mysqli_query($conn,$q);
    }  
?>
<!doctype html>
<html lang="en">  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>crud app</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Crud Operation</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Add new</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="col-lg-4 m-auto">
<form method="post">
<br><br><div class="card">
<div class="card-header bg-primary"><h1 class="text-white text-center">Add new member</h1></div><br>
  
    <label for="name" class="form-label">NAME</label>
    <input type="text" class="form-control" name="name"><br>
  
    <label for="email" class="form-label">EMAIL</label>
    <input type="email" class="form-control" name="email"><br>

    <label for="phone" class="form-label">PHONE</label>
    <input type="text" class="form-control" name="phone_no"><br>

    <button type="submit" class="btn btn-success" name="submit">Submit</button><br>
    <a class="btn btn-info" type="submit" name="cancel" href="index.php">cancel</a>
    </div>
</form>

</div>
  </body>
</html>
