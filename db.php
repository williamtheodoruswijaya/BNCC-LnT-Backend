<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_database = "attendance_system";
    if($conn = mysqli_connect($db_server, $db_username, $db_password, $db_database)){
        echo "Connected";
    }
    else{
        echo "Not connected";
    }
?>