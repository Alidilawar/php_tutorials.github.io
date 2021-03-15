<?php     
$insert = false;
if (isset($_POST['name'])) {
    // ---------connection to the database--------------------
     // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if (!$con)
    {
        die("Connection to this database failed due to" . mysqli_connect_error());
    }    
    
        // echo "Connection  successfull to the db";

        // Collect post variables
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $desc = $_POST['desc'];

        $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
        // echo $sql;
        if ($con->query($sql)) {
            // echo "successfully inserted";

            // Flag for successful insertion
            $insert = true;
        }
        else {
            echo "ERROR: $sql <br> $con->error";
        }

        // Close the data base connection
        $con->close();
    }          
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Css-include -->
    <link rel="stylesheet" href="style.css">

    <!-- font-awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <title>Welcome to Travel Form</title>
</head>

<body>
    <!----------------Navbar section------------------------>
    <section id="nav-bar">

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="images/logo-website.png" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Testemonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </section>

    <div class="conntainer text-center">
        <?php 
        if ($insert == true) {
            // echo "<p><i>Thanks for submitting your form. We are happy to see you joining us for the US trip</i></p>";
            echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Success!</strong> Thanks for submitting your form. We are happy to see you joining us for the US trip.
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
          </div>";
            
        }
        ?>
        <h1 class="my-3"><i>Welcome to UBITians US Trip form</i></h1>
        <p><i>Enter your details and submit this form to confirm your participation in the trip</i></p>
       
    </div>

    <div class="container">
        <form action="index.php" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Age</label>
                <input type="text" class="form-control" name="age" id="age" placeholder="Enter your Age">
            </div>
            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" class="form-control" name="gender" id="gender" placeholder="Enter your Gender">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="Enter your Phone">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Information</label>
                <textarea class="form-control" name="desc" id="desc" rows="3" placeholder="Enter any other information here"></textarea>
            </div>
            <button class="btn btn-success my-3">Submit</button>
        </form>
    </div>


    <!----------------Footer section------------------------>
    <section id="footer">
        <!-- <img src="images/wave.png" class="footer-img"> -->
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-box">
                    <img src="images/logo-website.png">
                    <p>Subscribe my youtube channel to watch more videos on website development, digital marketing and
                    graphic Designing</p>
                </div>
                <div class="col-md-4 footer-box">
                    <p><b>CONTACT US</b></p>
                    <p><i class="fa fa-map-marker"></i>
                       Habib Bank Plaza, Karachi, Pakistan</p>
                    <p><i class="fa fa-phone"></i> +92 0123456789</p>
                    <p><i class="fa fa-envelope-o"></i> abc@gmail.com.pk</p>
                </div>
                <div class="col-md-4 footer-box">
                    <p><b>SUBSCRIBE NEWSLETTER</b></p>
                    <input type="email" class="form-control" placeholder="Your Email">
                    <button type="button" class="btn btn-primary">Subscribe</button>                    
                </div>
            </div>
            <hr>
            <p class="copyright">Website crafted by iCoder</p>
        </div>
    </section>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->    

    
</body>

</html>