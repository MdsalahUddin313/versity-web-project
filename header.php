<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>header</title>
    <link rel="stylesheet" type="text/css" href="./css/navbar.css">
    <script
    src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
    crossorigin="anonymous"></script>
    <script>
    $(function() {
    $(".toggle").on("click", function() {
        if ($(".item").hasClass("active")) {
            $(".item").removeClass("active");
        } else {
            $(".item").addClass("active");
        }
    });
});
    </script>
</head>
<body>
    <nav>
        <ul class="menu">
            <li class="logo"><img src="./images/logo_two.png" style="height:25px;background-color:azure;" alt="" ></li>
            <li class="item"><a style="color:white" href="./index.php">Home</a></li>
            <li class="item"><a style="color:white" href="./About_us.php">About</a></li>
            <li class="item"><a style="color:white" href="./contact.php">Contact</a></li>
            </li>
            <li class="item button"><a href="./php/login.php">Log In</a></li>
            <li class="item button secondary"><a href="./php/register.php">Sign Up</a></li>
            <li class="toggle" ><span class="bars"></span></li>
        </ul>
    </nav>
  
</body>
</html>