<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>STUDENT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <!-- Style Sheet -->
    <style>
    body{  
    display: flexbox;
   padding-right: 100px;
   padding-left : 100px;
   
}

    </style>
</head>

<body>
<div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class=".col-lg-12">
                    <h1 class="page-header">Student Details</h1>
                </div>
            </div>

            <div class="row">
                <div class=".col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Total Records of Students
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <?php

                                    include ("../dbconnection.php");
                                    $conn = new mysqli('localhost', 'root', '', 'schoolmgmt');

                                    $qry = "SELECT * FROM student";
                                    $result = mysqli_query($conn, $qry);


                                    echo"
						            <thead>
                                    <tr>
                                        <th>ID</th>                             
                                        <th>Name</th>
                                        <th>NID</th>
                                        <th>Birth</th>
                                        <th>Address</th>
                                        <th>View</th>
                                        <th>Update</th>
                                        <th>Delete</th>
                                       
                                  
                                    </tr>
                                    </thead>";

                                    while($row=mysqli_fetch_array($result)){
                                        echo"<tbody>
                                <tr>
                                    <td>".$row['id']."</td>
                                    <td>".$row['name']."</td>
                                    <td>".$row['nid']."</td>
                                    <td>".$row['birth']."</td>
                                    <td >".$row['address']."</td>
                                    <td><a href='viewstudent.php?id=".$row['id']."'><img src='../res/viewicon.svg' alt='view' height='22' width='22'></a></td>
                                    <td><a href='updatestudent.php?id=".$row['id']."& name=".$row['name']." & nid=".$row['nid']." & dept=".$row['dept']." & birth=".$row['birth']." & address=".$row['address']."'><img src='../res/updateicon.svg' alt='update' height='22' width='22'></a></td>
                                    <td><a href='deletestudent.php?id=".$row['id']."'><img src='../res/deleteicon.svg' alt='delete' height='22' width='22'></a></td>

                                </tr>
                                </tbody>";
                                    }

                                    ?>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ml-auto p2 header-buttons">
        
        <a href="./createstudent.php">
            <button type="button" class="btn btn-success">Create Student</button>
        </a>
        <a href="../index.html">
            <button type="button" class="btn btn-success" style="float: right; ">Back</button>
        </a>
    </div>

                     </body> 

             </html>