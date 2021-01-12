<?php include 'data_connection.php';
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location:Investigation_table.php");
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>GDP</title>

    <style>
        .footer {
          position: fixed;
          left: 0;
          bottom: 0;
          width: 100%;
          background-color: red;
          color: white;
          text-align: center;
        }
		
		div.alignright {
  text-align: right;
} 
	table, th, td {
  padding: 10px;
}
table {
  border-spacing: 15px;
}
        </style>
		

</head>
<body style="background-color: #DFFEF4;">
    <nav class="navbar navbar-light bg-success">
        <a href="#" class="navbar-brand">
            <h4><img src="JKR.jpeg" alt="Group Image" width="30" height="30" class="d-inline-block align-top" loading="lazy">
            Goverment Camera Report (GDP 19) </h4>
			
			<div class="alignright;row my-2">		
			 <form action ="logout.php">
			 <button formaction="home.php" type="submit" class="btn btn-primary mx-auto" style="float:left; font-size:14px;width: 100px; height: 30px;">BACK</button>&emsp;
			 <input type="submit" value="Logout" class="btn btn-primary mx-auto" style=" float:right; font-size:14px;width: 100px; height: 30px;" ></input>
			 </form>
			 
        </a>
    </nav>
	
<table id="choose-address-table" class="ui-widget ui-widget-content">
<tr>
<th>Id</th>
<th>State</th>
<th>Location</th>
<th>Type</th>
<th>Severity</th>
<th>Description</th>
<th>image</th>
<th>Created date</th>
<th>Last update</th>
<th>Assigned_by</th>
<th>Status</th>
</tr>


<?php
include 'data_connection.php';
// Check connection
if ($con->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM report_data where assigned_by='$login_session' and status='investigation'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$url = $row  ['image'];
				echo "<td>" . $row["report_id"]. "</td>";
				echo "<td>". $row["state"] . "</td>";
				echo "<td>". $row["location"]. "</td>";
				echo "<td>". $row["type"] . "</td>";
				echo "<td>". $row["severity"]. "</td>";
				echo "<td>". $row["description"]. "</td>";
				echo "<td> <img src='" . $url . "' height='130' width='130'>  </td>"; //<a href='" . $url . "'>" . $url . "</a>
				echo "<td>". date("d/m/Y", strtotime($row["created_at"]))."</td>";
				echo "<td>". date("d/m/Y", strtotime($row["updated_at"]))."</td>";
				echo "<td>". $row["assigned_by"]. "</td>";
				echo "<td>". $row["status"]. "</td>";
				echo "<td><form action='search_session.php' method='POST'><input type='hidden' name='report_id' value='".$row["report_id"]."'/><input type='submit' name='tempId' value='Update' class='btn btn-danger mx-auto' /></form></td></tr>";
				echo "</tr>";
}


echo "</table>";
} else {
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
}
$con->close();

?>
        </div>
    </div>
</table>

</body>
</html>



                
