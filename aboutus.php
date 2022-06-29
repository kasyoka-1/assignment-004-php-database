<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web2";

// to connect the database and the form
$conn = mysqli_connect($server,$username,$password,$database);

if(isset($_POST["submitButton"]))
{
    // 1. fetch form data
    $email = $_POST["email"];

    // 2. submit form data
    $insertData = mysqli_query($conn, "INSERT INTO subscribers(email)VALUES('$email')");
    
    if($insertdata)
    {
        echo "Data submitted successfully";
    }
    else
    {
        echo "Error";
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="#" class="nav-link active">Home</a>
                    <a href="aboutus.html" class="nav-link">About Us</a>
                    <a href="#" class="nav-link">Contact Us</a>
                </div>
            </div>
        </div>


    </nav>


    <main class="p-5 bg-light">
        <h1>About Us</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, beatae! Numquam ullam itaque iste. Vero ducimus ratione quod magnam? Fugit vel corporis quo autem sequi enim at illum, dicta earum.
            </p>
    </main>
        <!-- Our Programs starts here -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 p-5">
                <h1>Our program</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ducimus voluptate magni beatae soluta, aspernatur corporis itaque, sed maxime laborum eum quaerat dignissimos quasi non asperiores ratione nostrum officia aliquam.
                    </p>
            </div>
            <div class="col-lg-6 pt-5">
                <img src="images/image.jpg" alt="image preview" style="border-radius: 20px;" height="300px" width="500px">
            </div>
        </div>
        <!-- Our Programs ends here -->


        <!-- Cards start here -->
        <div class="row">
            <h1 class="pb-5 pt-5">The programs</h1>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Skill Discovery</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">View details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Upskilling Program</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">View details</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Path Finding Program</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">View details</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cards ends here -->
        <div class="row">
            <p style="padding-top: 60px; text-align: center; font-size: large; color: darkgray; font-weight: 400;">
                Subscribe to get information, latest news about<br> Zalego Academy
            </p>
            <form action="aboutus.php" method="POST">
                <div class="row">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="email" class="form-control" placeholder="Your email address">
                        
                    </div>
                    <div class="col-lg-4">
                        <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
                    </div>
                    
                </div>
            </form>

        </div>
        <hr>
        <footer>
            &copy;Zalego Academy 2022
        </footer>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>