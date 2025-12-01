<?php
    $db_username = "root";
    $db_password = "";
    $db_servername = "localhost";
    $db_name = "opportunitytours";
    

    $db_conn = mysqli_connect($db_servername, $db_username, $db_password, $db_name);

    if(!$db_conn){
        echo"connection failed.";
    }


    ?>