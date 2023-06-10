<?php 
include("connection.php"); 

$inpersonid = $_GET['id'];

$storeforlist = "DELETE FROM REQUEST_LIST WHERE customerID = '$inpersonid'";
$datastoreforlist = mysqli_query($conn, $storeforlist);


if ($datastoreforlist) {
    echo "Data Deleted";
    ?>

    <meta http-equiv = "refresh" content = "0; url =./Admin List View.php" />

<?php
}
else {
    echo "Failed";
}

?>