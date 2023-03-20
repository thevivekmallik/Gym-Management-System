<?php

include 'config.php';

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $delete = mysqli_query($connection,"DELETE FROM `coach` WHERE `id`='$id'");
}


$select = "select * from coach";
$query = mysqli_query($connection, $select);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GMS</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card mt-5">
                    <a class="navbar-brand" href="admin-login.php"><img src="img\logo.jpg" width ="80" height="90"alt="Gym-logo"></a>
                    <h3>GMS</h3>
                    <div class="card-header">
                        <h3 class="display-6 text-center">Coach Details</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bodered text-center">
                            <tr class="bg-dark text-white">
                                <td>Id</td>
                                <td>Name</td>
                                <td>DOB</td>
                                <td>Experience</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                            <tr>
                                <?php
                                    $num = mysqli_num_rows($query);
                                    if ($num>0){
                                        while($result = mysqli_fetch_assoc($query)) {
                                            echo "
                                            <tr>
                                                <td>".$result['id']."</td>
                                                <td>".$result['name']."</td>
                                                <td>".$result['date']."</td>
                                                <td>".$result['experience']."</td>
                                                <td><a href='#' class='btn btn-primary'>Edit</a></td>
                                                <td><a href='coachdetails.php?id=".$result['id']."' class='btn btn-danger'>Delete</a></td>
                                            </tr>
                                            ";
                                        }
                                    }

                                ?>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>