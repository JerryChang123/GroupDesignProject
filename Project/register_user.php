<?php
$username = $_POST['username'];
$lastname = $_POST['lastname'];
$firstname = $_POST['firstname'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$birth_date = $_POST['birth_date'];

if (!empty($username) || !empty($lastname) || !empty($firstname) || !empty($password) || !empty($email) || !empty($phone) || !empty($birth_date)) {
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "jkrdb";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT * From website_users Where email = ? OR username=? Limit 1";
     $INSERT = "INSERT Into website_users (username, lastname, firstname, password, email, phone, birth_date) values( ?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("ss", $email,$username);
     $stmt->execute();
     $stmt->bind_result($email,$username);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
	  $hash_password=md5($password);
      $stmt->bind_param("sssssss", $username, $lastname, $firstname, $hash_password, $email, $phone, $birth_date);
      $stmt->execute();
      header("Location: registration_complete.html");
     } else {
      header("Location: registration_fail.html");
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>