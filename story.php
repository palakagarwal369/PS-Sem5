<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bonheur+Royale&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Ephesis&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>



    <!--------------------------------------navbar----------------------------------------->

    <nav class="navbar sticky-top navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="logo">
                <img src="images/logo.png" alt="logo">
                <div class="navbar-brand" href="#">Business Boost</div>
            </div>
            <!--<div class="navbar-brand" href="#">Webname</div>-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="home.php#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="home.php#contactus">Contact Us</a>
                    </li>
                    
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#aboutus"> # </a>
                    </li>-
                    <button class="dark-light" onclick="myFunction()"
                        style="background-color: transparent; border: none; color: whitesmoke;"><i class="fa fa-adjust"
                            aria-hidden="true"></i></button>-->
                </ul>

            </div>
        </div>
    </nav>

    <!------------------------------------------end of navbar----------------------------------------------->

    <!--==================================================================================================-->

    <div class="container" style="width: 40%; min-width: 350px; color: rgb(5, 4, 4);"><br>
    <form method="POST" action="reviewbe.php" 
            style="background-color: rgb(0, 0, 0, 0.7); padding: 3%; border-radius: 15px; ">
                <center>
                    <h1 style=" , cursive; color: whitesmoke;">Share Your Experience</h1><hr style="color: grey;">
                    <p style="color: whitesmoke; font-family: 'Ephesis', cursive; font-size: 20px;">Dear customer, Thank you for your support. We truly appreciate your business and look forward to serving you again !</p>
                    
                </center>
                <div class="row">
                    <div class="col-sm">
                        <div class="mb-2">
                            <label for="name" class="form-label"
                                style="color: whitesmoke">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>

                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="mb-4">
                        <label for="feedback" class="form-label"
                            style="color: whitesmoke;">Your Story</label>
                        <textarea type="text" class="form-control" name="feedback" id="feedback" rows="5" required></textarea>
                    </div>
                </div>
                <center><button type="submit" class="frmsub" name="submit" onclick="alert('Thankyou for your valuable story. Hope to work with you again!!!')">Submit</button></center>
                
            </form>
            </div>
            <style>
                body {
                    background-image: url('images/preview.jpg');
                    background-size: 100% 100%;
                    position: relative;
                    height: 100vh;
                    z-index: 1;
                    
                    background-size: cover;
                }
            </style>
        
</body>
</html>