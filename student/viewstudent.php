<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>STUDENT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <!-- Style Sheet -->
    <style>
    body{
    
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
                        

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <?php
                                    $id = $_GET['id'];
                                    include ("../dbconnection.php");
                                    $conn = new mysqli('localhost', 'root', '', 'schoolmgmt');

                                    $qry = "SELECT * FROM student WHERE id = '$id'";
                                    $result = mysqli_query($conn, $qry);


                                    echo"
						            <thead>
                                    <tr>
                                        <th>Name</th>                             
                                        <th>Department</th>
                                        <th>Batch</th>
                                       
                                
                                    </tr>
                                    </thead>";

                                    while($row=mysqli_fetch_array($result)){
                                        echo"<tbody>
                                <tr>
                                    <td>".$row['name']."</td>
                                    <td>".$row['dept']."</td>
                                    <td>".$row['batch']."</td>
                                    
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
                     </body> 

             </html>