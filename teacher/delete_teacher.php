<?php

    $id = $_GET['id'];

    include ("../dbconnection.php");
    mysqli_query($conn, "DELETE FROM teacher WHERE id='$id'");

    header("location: teacher.php");

?>