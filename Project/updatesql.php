<?php
session_start();
$search = $_SESSION['search'];
include 'data_connection.php';
$status = $_POST['status'];
$reason = $_POST['reason'];
$cost = $_POST['cost'];
$estimate = $_POST['estimate'];
$note = $_POST['note'];
$ImageName = uniqid();
$ImagePath = "/xampp/htdocs/apps/upload/$ImageName.jpg";
 $ImageURL = "https://2eabb484ebb4.ngrok.io/apps/upload/$ImageName.jpg"; //192.168.1.18
 $updatesql = "UPDATE report_data SET status='$status', reason='$reason', cost='$cost', estimate_complete='$estimate', note='$note', updated_at=Now() WHERE report_id='$search'";

     //Prepare statement
mysqli_query($con, $updatesql);
if($_FILES['imgstaff']['size'] != 0) {
move_uploaded_file($_FILES["imgstaff"]["tmp_name"], "$ImagePath");
$updatesql = "UPDATE report_data SET staff_image='$ImageURL', updated_at=Now() WHERE report_id='$search'";
mysqli_query($con, $updatesql);
}
header("location: details.php");
?>