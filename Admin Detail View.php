<?php include("connection.php"); 

session_start();

$logininfo = $_SESSION['email'];

if ($logininfo == true) {
  
}
else {
  header('location:login.php');
}

$inpersonid = $_GET['id'];

$storeforlist = "SELECT * FROM REQUEST_LIST where customerID='$inpersonid'";
$datastoreforlist = mysqli_query($conn, $storeforlist);

$totalrows = mysqli_num_rows($datastoreforlist);
$result = mysqli_fetch_assoc($datastoreforlist);

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
    <div class="registration headersec text-center mb-5" style="background: #d1d1d124;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                          <a href="./index.php"><img src="./img-logo-green.png" alt="" class="advantage"></a>
                          <div class="gobacktolist">
                            <h4><a href="./Admin List View.php" style="color: #24c670;"><i class="bi bi-arrow-left-circle-fill"></i> Go Back to List View</a> <a href="logout.php" style="margin-left:10px;"><input type="submit" name="" value="Log Out" class="btn btn-red"></a></h4>
                          </div>
                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </div>
<!-- Header Section End -->

<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="headline">
                <h2>Customer Details</h2>
            </div>
        </div>
    </div>
</div>

<!-- Data Section Start -->
<div class="customer-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
            <div class="customer-details-3">
                    <h6><b>Consultation Date:</b> <?php echo $result['date'];?></h6>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="customer-details-1">
                    <h6><b>Customer Name:</b> <?php echo $result['name'];?></h6>
                    <h6><b>Customer Email:</b> <?php echo $result['email'];?></h6>
                    <h6><b>Customer Number:</b> <?php echo $result['number'];?></h6>
                    <h6><b>Customer Request:</b> <?php echo $result['request'];?></h6>
                    <h6><b>Service Pack:</b> <?php echo $result['plan'];?></h6>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="customer-details-4">
                    <p><b>Reason of Booking:</b> <?php echo $result['textarea'];?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Section End -->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>