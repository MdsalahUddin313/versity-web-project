<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/index_page_style.css">
    <link rel="stylesheet" href="./css/contact_page.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <title>Contact</title>
</head>

<body>
<!--Header part-->
<header>
    <?php
    include './header.php';
    ?>
</header>
    <section class="contact-form container">
        <div class="row">
           
            <p style="margin-bottom: 50px;
color: darkcyan;">Feel free to contact us anytime at +880-100-1xxxxxx.
                Or if you prefer, you can drop us a note using the form below. You'll always get a response from a real person — with a real name — within 48 hours.</p>
            <div class="col-md-6">
            <h5 style="text-align: center;
            margin-bottom:25px">Send Us A Message</h5>
                <form>
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label">Your Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="phone" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label">Massage Subject</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputText" placeholder="Massage Subject">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label">Massage</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-massage" id="inputText" placeholder="Massage">
                        </div>
                    </div>

                    <input type="submit" class="btn btn-primary mb-2 justify-end" value="Submit" name="submit"></input>
                </form>
            </div>
            <div class="col-md-6">
                <div style="margin-top:0px;padding-top:135px;padding-bottom:105px;background-image:url('./images/card-images/background.jpg');">
                <h5 style="color:white;margin-bottom:35px;text-align:center;">Address</h5>
                <p style="text-align:center;color:#0B3B24;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                <h5 style="color:white;margin-bottom:35px;text-align:center;">Let's Talk</h5>
                <p style="text-align:center;color:#0B3B24;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>

                <h5 style="color:white;margin-bottom:35px;text-align:center;">Genaral Support</h5>
                <p style="text-align:center;color:#0B3B24;">industry-assdfge-lkja@assd.com</p>
            </div>
            </div>
        </div>
    </section>

     <!--footer-->
  <footer> <?php
            include './footer.php';
            ?></footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>