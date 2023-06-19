<?php 

$id = $_GET['id'];
$dept = $_GET['dept'];
$name = $_GET['name'];
$nid = $_GET['nid'];
$address = $_GET['address'];
$birth = $_GET['birth'];


    include ("../dbconnection.php");
    $conn = new mysqli('localhost', 'root', '', 'schoolmgmt');

    $query = "UPDATE student SET dept='$dept', name='$name', nid='$nid', birth='$birth', address='$address' WHERE id='$id'";
    
    mysqli_query( $conn, $query )

		or die("Can not execute query");

    header("location: student.php");

?>