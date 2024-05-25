<?php
    include "connection.php";
    $id="";
    $name="";
    $email="";
    $phone_no="";

    $error="";
    $success="";

    if($_SERVER["REQUEST_METHOD"]=='GET'){
        if(!isset($_GET['id'])){
            header("location:crud_app/index.php");
        }
    $id=$_GET['id'];
    $sql="select * from student where id=$id";
    $result= $conn->query($sql);
    $row=$result->fetch_assoc();
    while(!$row){
        header("location:crud_app/index.php");
        exit;
    }
    $name=$row["name"];
    $email=$row["email"];
    $phone_no=$row["phone_no"];
    }
    else{
        $id = $_POST["id"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone_no = $_POST["phone_no"];

        $sql = "update student set name='$name', email='$email',phone_no='$phone_no' where id='$id' ";
        $result = $conn->query($sql);
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
          <a class="nav-link" href="index.php">new</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="col-lg-4 m-auto">
<form method="post">
<br><br><div class="card">
<div class="card-header bg-primary"><h1 class="text-white text-center">update member</h1></div><br>
    <input type="hidden" name="id" value="<?php echo $id; ?>" class="form-control"><br>
    <label for="name" class="form-label">NAME</label>
    <input type="text" value="<?php echo $name ?>" class="form-control" name="name"><br>
  
    <label for="email" class="form-label">EMAIL</label>
    <input type="email" value="<?php echo $email ?>" class="form-control" name="email"><br>

    <label for="phone" class="form-label">PHONE</label>
    <input type="text" value="<?php echo $phone_no ?>" class="form-control" name="phone_no"><br>

    <button type="submit" class="btn btn-success" name="submit">Submit</button><br>
    <a class="btn btn-info" type="submit" name="cancel" href="index.php">cancel</a>
    </div>
</form>

</div>
  </body>
</html>
   