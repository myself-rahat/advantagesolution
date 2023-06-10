<?php
error_reporting(0);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "advantages_requestlist";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn) {
        //echo "OK";
    }
    else{
        echo "Failed".mysqli_connect_error();
    }

?>