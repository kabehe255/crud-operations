<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `student` where id=$id";
        $conn->query($sql);
    }
    header('location:/crud_app/index.php');
    exit;
?>