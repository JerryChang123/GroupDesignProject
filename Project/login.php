<?php
session_start(); // Starting Session
$error = ''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is empty";
}
else{
// Define $username and $password
$username = $_POST['username'];
$password = $_POST['password'];
$hash_password = md5($password);
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "jkrdb");
// SQL query to fetch information of registerd users and finds user match.
$query = "SELECT username, password from website_users where username=? AND password=? LIMIT 1";
// To protect MySQL injection for Security purpose
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $hash_password);
$stmt->execute();
$stmt->bind_result($username, $hash_password);
$stmt->store_result();
if($stmt->fetch()){ //fetching the contents of the row 
$_SESSION['login_user'] = $username; // Initializing Session
header("location: home.php"); // Redirecting To Profile Page
}
else{
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
}
}
?>