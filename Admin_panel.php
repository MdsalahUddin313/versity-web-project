<?php
session_start();
define('localhost','DBHOST');
define('root','DBUSER');
define('','password');
define('user','DBNAME');

$connection=new mysql(DBHOST,)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/admin.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/index_page_style.css">
    <link rel="stylesheet" href="./css/about.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin panel</title>


</head>

<body>
    <section class="Admin-part">

        <!-- The sidebar -->
        <div class="sidebar">
            <img ref="data:image/jpeg;base64,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" class="admin-person-images" alt="">
            <a class="" href="./index.php">Home</a>
            <a href="#name">Admin Name</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
        </div>

        <!-- Page content -->
        <div class="content">
            <h1 style="padding-top:35px;padding-bottom:35px;">User Details</h1>

<?php

 while($row=mysqli_fetch_assoc($sql)){


 }

?>

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Password</th>
                        <th scope="col">Email</th>
                        <th scope="col">Custom Account</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><button class="btn btn-success">Edit</button><button style="margin-left:3px" class="btn btn-danger">Delete</button></td>
                    </tr>
                </tbody>
            </table>



            <div class="visitors-massages" style="margin-top:65px;">
            <h1 style="padding-top:35px;padding-bottom:35px;">Visitors Massages And Details</h1>

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject of Massage</th>
                        <th scope="col">Massage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>201458745</td>
                        <td>Otto@mn.com</td>
                        <td>Subject</td>
                        <td>Massages length</td>

                        <td><button class="btn btn-success">Edit</button><button style="margin-left:3px" class="btn btn-danger">Delete</button></td>
                    </tr>
                </tbody>
            </table>
            
            </div>
        </div>

        </div>
    </section>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>