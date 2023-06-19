<?php 

    $id = $_GET['id'];
    $dept = $_GET['dept'];
    $batch = $_GET['batch'];
    $name = $_GET['name'];
    $nid = $_GET['nid'];
    $address = $_GET['address'];
    $birth = $_GET['birth'];

    include ("../dbconnection.php");
    $conn = new mysqli('localhost', 'root', '', 'schoolmgmt');

    mysqli_query($conn, "INSERT INTO student (id, dept, batch, name, nid, birth, address) VALUES ('$id', '$dept', '$batch', '$name', '$nid', '$birth', '$address')");
    header("location: student.php");

?>