<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "web2";

// to connect the database and the form
$conn = mysqli_connect($server,$username,$password,$database);

if(isset($_POST["submitapplication"]))
{
    // 1. fetch form data
    $fullname = $_POST["fullname"];
    $phonenumber = $_POST["phonenumber"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $course = $_POST["course"];

    // 2. submit form data
    $insertdata = mysqli_query($conn, "INSERT INTO enrollment(fullname,phonenumber,email,gender,course)VALUES('$fullname','$phonenumber','$email','$gender','$course')");
    
    if($insertdata)
    {
        echo "Data submitted successfully";
    }
    else
    {
        echo "Error".mysqli_error($conn);
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
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
    <!-- nav starts here -->
    <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="#" class="nav-link ">Home</a>
                    <a href="#" class="nav-link">About Us</a>
                    <a href="#" class="nav-link active">Register Now</a>
                </div>
            </div>
        </div>


    </nav>


    
        <!-- july software.... starts here -->
        <main class="text-center p-5 mb-4 bg-light">
            <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
            <ul style="list-style-type:none ;">
                <li style="padding-right: 600px">
                        <span><i class="fa fa-calendar fa-2x"></i> <span>
                        <span>20th July 2022</span>
                </li>
                <li style="padding-right: 600px">
                        <span><i class="fa fa-map-marker fa-2x"></i> <span>
                        <span>Zalego Academy<br>Devan Plaza</span>
                </li>
            </ul>
        </main>
        <!-- july software..... ends here -->


        <!-- looking for...starts here -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-centre">
                <p>
                    Looking for a place to kickstart your career in Technology?<br>
                    Whether you're a local, new in town or just cruising through we've got<br>
                    loads of great tips and events for you.
                </p>
            </div>
        </div>
        <!-- looking for...ends here -->

        
        <div class="card" style="width: 80%;">
            <div class="card-body">
                <form action="enroll.php" method="POST" class="container">
                    <h5 class="card-title">Sign up today?</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fullname" class="form-label">Full Name:</label>
                            <input type="text" name="fullname" class="form-control" placeholder="Enter your full name">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="phonenumber" class="form-label">Phone Number:</label>
                            <input type="text" name="phonenumber" class="form-control" placeholder="+2547...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="email" class="form-label">Email Address:</label>
                            <input type="text" name="email" class="form-control" placeholder="Please enter your email address">
                        </div>
                        <div class="col-lg-6">
                            <label for="gender" class="form-label"><b>What is your gender</b></label>
                            <select name="gender" class="form-select" aria-label="Default select example">
                                <option selected>--select your gender--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>   
                    <div class="row">
                    <p>
                        In order to complete your registration to the bootcamp, you are required to select one course you will be undertaking. Please NOTE that this will be your learning track during the 2-weeks immersion.
                    </p>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <label for="gender" class="form-label"><b>What's your preffered course</b></label>
                        <select class="form-select" name="course"  aria-label="Default select example">
                            <option selected>--select your course--</option>
                            <option value="Software Development">Software Development</option>
                            <option value="Data analysis">Data analysis</option>
                        </select>
                    </div>
                </div>
           
                <div class="row">
                    <p>
                        You agree by providing your information you understand all our data privacy and protection policy outlined in out Terms & condition and the Privacy Policy statements.
                    </p>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">Agree terms and condition.</label>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <button type="submit" name="submitapplication" class="btn btn-primary">submit application</button>
                        </div>
                    </div>
                    
                </div>
                </form>

                    
             
            </div>
        </div>        
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
                        <button type="submit" name="submitButton" class="btn btn-primary">Subscribe</button>
                    </div>
                        
                </div>
            </form>    

        </div>
    </div>
                        
            

    <hr>
    <footer>
        &copy;Zalego Academy 2022
    </footer>







    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <!-- <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>
