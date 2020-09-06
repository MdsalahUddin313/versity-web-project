

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/index_page_style.css">
  <title>Home</title>
</head>

<body>
  <!--header-->
  <header> <?php
            include './header.php';
            ?></header>


  <!--body-->
  <section class="body-part">
    <div class="home-carsoul-part">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 home_carosoul_images" src="https://i.pinimg.com/originals/de/1d/df/de1ddf9ee30e08e15460626b919ef87e.jpg" alt="First slide">
          </div>
          <div class="carousel-item ">
            <img class="d-block w-100 home_carosoul_images" src="https://www.pxwall.com/wp-content/uploads/2019/04/4K-UHD-Desktop-Wallpapers.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 home_carosoul_images" src="https://preview.redd.it/c3uhsgo1vx541.jpg?width=960&crop=smart&auto=webp&s=fe0a8bdb9635673d7025293326c8d8ee47fa6703" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <h3 style="font-size: 1.75rem;
    text-align: center;
    padding: 15px;
    margin-top: 0px;
    color: darkslategray;">Our Top Courses</h3>

    
    <div class="product-part">
      <?php
      include './products.php';
      ?>   
       </div>
  
  </section>

  <!--footer-->
  <footer> <?php
            include './footer.php';
            ?></footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>

