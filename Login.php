<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdVantage Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>


    <!-- Login Form Section Start -->
        <div class="registrationsc">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 offset-xl-4">
                        <div class="lo-page-logo">
                            <a href="./Main Page.php"><img src="./img/logo-green.png" alt="Main Logo" width="250px"></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 offset-xl-4">
                        <div class="registrationformtitle mb-4">
                            <h4>Administration Login</h4>
                        </div>
                    </div>
                    <div class="col-xl-4 offset-xl-4">
                        <div class="registrationform">
                            <form action="#" method="POST">
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">Access Email</label>
                                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputPassword1" class="form-label">Access Passcode</label>
                                  <input type="password" class="form-control" id="exampleInputPassword1" name="passcode">
                                </div>
                                <input type="submit" class="btn btn-grn" value="Get Access" name="submit">
                            </form>
                            <p class="mt-4"><i><i class="bi bi-info-circle"></i> new here? Collect your access from administration.</i></p>
                            <p class="mt-1"><i><i class="bi bi-info-circle"></i> lost password? Ask help from the administration.</i></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Login Form Section End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>

<?php include("connection.php");

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $passcode = $_POST['passcode'];

        $vaildquery = "SELECT * FROM LOGIN_INFO WHERE email = '$email' && passcode = '$passcode' ";
        $validitystored = mysqli_query($conn, $vaildquery);

        $total = mysqli_num_rows($validitystored);
        
        if ($total == 1) {
            $_SESSION['email'] = $email;
            header('Location:Admin List View.php');
        }
        else {
            echo "Login FAILED";
        }


    }


?>