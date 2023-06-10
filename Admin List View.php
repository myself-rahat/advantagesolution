<?php 
include("connection.php");

session_start();

$logininfo = $_SESSION['email'];

if ($logininfo == true) {
  
}
else {
  header('location:login.php');
}

$storeforlist = "SELECT * FROM REQUEST_LIST";
$datastoreforlist = mysqli_query($conn, $storeforlist);

$totalrows = mysqli_num_rows($datastoreforlist);



//echo $totalrows;

if ($totalrows != 0) {
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
    
    <!-- Header Section Start -->
    <div class="registration headersec text-center mb-5" style="background: #d1d1d124;">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                          <a href="./Main Page.php"><img src="./img/logo-green.png" alt="" class="advantage"></a>
                          <a href="logout.php"><input type="submit" name="" value="Log Out" class="btn btn-red"></a>
                        </div>
                      </nav>
                </div>
            </div>
        </div>
    </div>
<!-- Header Section End -->

<div class="customerdata">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="customerdata-title">
                    <h3>Requested Consultations:</h3>
                </div>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-xl-8">
                <table class="table ttable">
                    <thead>
                        <tr>
                          <th scope="col">Customer ID</th>
                          <th scope="col">Name</th>
                          <th scope="col">Request</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>                 

                    <?php
                          while ($result = mysqli_fetch_assoc($datastoreforlist)) {
                            echo "
                            <tbody>
                              <tr>
                                <td>".$result["customerID"]."</td>
                                <td>".$result["name"]."</td>
                                <td>".$result["email"]."</td>
                                <td><a href='./Admin Detail View.php?id=$result[customerID]' class='btn btn-grn' width='30px'>View</a>
                                    <a href='Delete.php?id=$result[customerID]' width='30px'><input type='submit' value='Delete' class='btn btn-red' onclick = 'return deletecheck()'></a></td>
                              </tr>
                            </tbody>";
                          }
                        }
                        else {
                          echo "No records found";
                        }

                    ?>

            </table>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
      function deletecheck() {
        return confirm('Are you sure you want to delete this record?');
      }
    </script>
  </body>
</html>