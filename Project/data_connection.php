<?php 
 // Connects to Our Database 
$con = new mysqli('localhost', 'root', '', 'jkrdb');

/* check connection */
if (mysqli_connect_errno()) {
    echo "Could not connect to database, please check your connection details";
    exit();
}

 ?> 