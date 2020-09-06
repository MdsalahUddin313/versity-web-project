<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>


    <link rel="stylesheet" type="text/css" href="./css/navbar.css">
</head>

<body>
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" style="font-size:13px" href="./index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size:13px" href="./About_us.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="./catagories.php" style="font-size:13px" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Catagories
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="./catagories.php">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="font-size:13px" href="./contact.php">Contact</a>
                </li>
            </ul>
            <div>
                <form style="border-radius:45px;" class="form-inline my-2 my-lg-0">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary btn-number">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                </form>

                <a class="btn btn-success form-inline my-2 my-lg-0  btn-sm ml-3" style="margin-right:15px;margin-left:5px;" href="cart.php">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">3</span>
                </a>








                <div style="margin-right:65px;" class="input-group">

                    <div class="input-group-append">
                        <button style="border-radius:95px;" class="btn btn btn-outline-success dropdown-toggle form-inline my-2 my-lg-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu"><?php if (isset($_SESSION['username'])) : ?>
                            <a class="dropdown-item" href="#">Hi,<?php echo $_SESSION['username']; ?></a>
                            <a class="dropdown-item" href="./login.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
Login</a>
                            <a style="color:red" class="dropdown-item" href="index.php?logout='1'"><i class="fa fa-sign-out" aria-hidden="true"></i>
Sign out</a>
<?php endif ?>
                           
                        </div>
                    </div>
                </div>

                
            </div>

        </div>
    </nav>

    <!-- </nav> 

            <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item m-auto">
                        <a class="nav-link" style="font-size:12px;" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size:12px;" href="catagories.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size:12px;" href="About_us.php">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="font-size:12px;" href="contact.php">Contact</a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary btn-number">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>



 -->

























    </div>
    </div>
    </form>
    </div>
    </div>
    </nav>

</body>




<!--  
<div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user-circle" aria-hidden="true"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#"> <?php if (isset($_SESSION['username'])) : ?>
                                    <p><strong><?php echo $_SESSION['username']; ?></strong></p>

                                    </p></a>

                            <a class="dropdown-item" href="index.php?logout='1'">Logout</a>
                        <?php endif ?></div> -->

</html>