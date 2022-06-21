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
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phonenumber"];
    $message = $_POST["message"];

    // 2. submit form data
    $insertData = mysqli_query($conn, "INSERT INTO contactus(firstname,lastname,phonenumber,email,message)VALUES('$firstname','$lastname','$phone','$email','$message')");
    if($insertData){
        echo "Data submitted succesfully";
    }
    else{
        echo "Error occured";
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
    <!-- navbar starts here -->
   <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
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
 -->

    </nav> -->

    <!-- navbar ends here -->
    <main class="p-5 bg-light mb-4">
        <h1>Welcome, Mutuku Kasyoka</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, vitae tempora. Animi necessitatibus commodi mollitia repellat, perspiciatis dolorem fuga quidem!
        </p>
        <button class="btn btn-primary">Learn more</button>
    </main>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <h1>Header 1</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ducimus voluptate magni beatae soluta, aspernatur corporis itaque, sed maxime laborum eum quaerat dignissimos quasi non asperiores ratione nostrum officia aliquam.
                    </p>
                <button class="btn btn-primary">View details</button>
            </div>
            <div class="col-lg-4 col-md-6">
                <h1>Header 2</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ducimus voluptate magni beatae soluta, aspernatur corporis itaque, sed maxime laborum eum quaerat dignissimos quasi non asperiores ratione nostrum officia aliquam.
                    </p>
                <button class="btn btn-primary">View details</button>
            </div>
            <div class="col-lg-4 col-md-6">
                <h1>Header 3</h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ducimus voluptate magni beatae soluta, aspernatur corporis itaque, sed maxime laborum eum quaerat dignissimos quasi non asperiores ratione nostrum officia aliquam.
                    </p>
                <button class="btn btn-primary">View details</button>
            </div>
            
        </div>

        <!-- contact us starts here -->
        <div class="row pt-5">
            <h1>Contact Us</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, beatae! Numquam ullam itaque iste. Vero ducimus ratione quod magnam? Fugit vel corporis quo autem sequi enim at illum, dicta earum.
                </p>

                <form action="index.php" method="POST">
                     <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" placeholder="Enter your first name">
                         </div>
                         <div class="mb-3 col-lg-6">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" name="lastname" class="form-control" placeholder="Enter your last name">
                         </div>
                     </div>
                     <div class="row">
                        <div class="mb-3 col-lg-6">
                             <label for="phonenumber" class="form-label">Phone Number</label>
                             <input type="text" name="phonenumber" class="form-control" placeholder="Enter your phone number">
                        </div>
                        <div class="mb-3 col-lg-6">
                             <label for="email" class="form-label">Email</label>
                             <input type="text" name="email" class="form-control" placeholder="Enter your email">
                        </div>
                     </div>
                     <div class="row">
                         <div class="mb-3 col-lg-12">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea cols="30" name="message" rows="5" class="form-control"></textarea>
                         </div>
                     </div>
                    <button type="submit" name="submitButton" class="btn btn-primary">Send a message</button>
                </form>
        </div>
        <!-- contact us ends here -->

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







