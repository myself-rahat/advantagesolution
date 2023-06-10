<?php include("connection.php"); ?>

<?php 
    if ($_POST['submit']) {
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $number     = $_POST['number'];
        $request    = $_POST['request'];
        $plan       = $_POST['plan'];
        $date       = $_POST['date'];
        $textarea   = $_POST['textarea'];

        $insertlist = "INSERT INTO REQUEST_LIST (name,email,number,request,plan,date,textarea) VALUES('$name','$email','$number','$request','$plan','$date','$textarea')";
        $data = mysqli_query($conn,$insertlist);

        if ($data) {
            echo "";
            ?>

        <meta http-equiv = "refresh" content = "0; url =./Booking Success.php" />

        <?php
        }
        else {
            echo "Failed";
        }
        
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdVantage Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img-favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
    <!-- Header Section Start -->
        <div class="registration headersec text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <nav class="navbar navbar-expand-lg">
                            <div class="container-fluid" style="justify-content: center; margin-top: 50px;">
                                <a href="./index.php"><img src="./img-logo-green.png" alt="Logo" width="300px"></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    <!-- Header Section End -->

    <!-- Full Section Start -->
        <div class="bookingformsec">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-4">
                        <h2 class="mb-4">Booking for Consultation</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 offset-xl-4">
                        <div class="bookingform">
                            <form action="#" method="POST">
                                <div class="securityqa">
                                    <div class="mb-3">
                                       <label for="name" class="form-label">Your Name</label>
                                       <input type="text" class="form-control" id="exampleInputName" name="name" required>
                                    </div>
                                    <div class="mb-3">
                                       <label for="email" class="form-label">Your Email</label>
                                       <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                       <label for="phone" class="form-label">Your Contact Number</label>
                                       <input type="text" class="form-control" id="exampleInputNumber" name="number" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="option" class="form-label">What Do You Want to Book?</label>
                                        <select class="form-select" aria-label="Default select example" name="request" required>
                                            <option value="On Office Consultation" selected="">On Office Consultation</option>
                                            <option value="A Call">A Call</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="option" class="form-label">Which Service Do You Want to Take?</label>
                                        <select class="form-select" aria-label="Default select example" name="plan">
                                            <option value="Basic Plan" selected="">Basic Plan</option>
                                            <option value="Master Plan">Master Plan</option>
                                            <option value="Custom Plan">Custom Plan</option>
                                            <option value="Not Sure">Not Sure</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="date" class="form-label">Select Consultation Date</label>
                                        <input type="date" class="form-control" id="exampleInputNumber" name="date" required>
                                     </div>
                                    <div class="mb-3">
                                        <label for="comments" class="form-label">Tell us why are you booking?</label>
                                        <textarea id="comments" style="width: 100%;" name="textarea"></textarea>
                                     </div>
                                </div>
                                <input type="submit" class="btn btn-grn w-100" name="submit" value="submit">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-xl-12">
                        <div class="gobackbtn text-center">
                            <button class="btn"><a href="./index.php" class="btn"><i class="bi bi-arrow-left-circle-fill"></i> Go Back</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Full Section End -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

