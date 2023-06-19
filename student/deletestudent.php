<?php

    $id = $_GET['id'];

    include ("../dbconnection.php");
    mysqli_query($conn, "DELETE FROM student WHERE id='$id'");

    header("location: student.php");

?>