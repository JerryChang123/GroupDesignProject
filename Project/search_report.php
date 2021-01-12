<?php
$search = $_SESSION['search'];
$query = "Select * from report_data where report_id='$search'";
$result = mysqli_query($con,$query);
if(mysqli_num_rows($result) > 0){
while($row = mysqli_fetch_array($result)){
$report_id=$row["report_id"];
$state = $row["state"];
$type = $row["type"];
$severity = $row["severity"];
$location = $row["location"];
$description = $row["description"];
$assigned_by = $row["assigned_by"];
$image = $row["image"];
$created_by=$row["created_by"];
$date_created=$row["created_at"];
$date_updated=$row["updated_at"];
$status = $row["status"];
$reason = $row["reason"];
$cost = $row["cost"];
$estimate_complete = $row["estimate_complete"];
$note = $row["note"];
$staff_image=$row["staff_image"];
}
} else { header("location:search_fail.html"); }  
?>