<?php
include 'data_connection.php';
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location:home.php"); // Redirecting To Home Page
}
?>

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
        </style>
</head>
<body style="background-color: aquamarine;">
    <nav class="navbar navbar-light bg-success">
        <a href="#" class="navbar-brand">
            <h4><img src="JKR.jpeg" alt="Group Image" width="30" height="30" class="d-inline-block align-top" loading="lazy">
            Goverment Camera Report (GDP 19) </h4>
			
			<div class="alignright">			 
			 <form action ="logout.php">
			 <input type="submit" value="Logout" class="btn btn-primary mx-auto" style="; float:right; font-size:14px;width: 100px; height: 30px;" ></input>
			 </form>
			 
        </a>
    </nav>
    <div class="container my-3">
        <div class="row">
            <div class="col">
                <div class="bg-primary">
                    <h3>Welcome: <i><?php echo $login_session;?></i></h3>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
        <div class="row">
            <div class="col m-2 bg-primary">
                <div class="row-2">
					<form action ="latest_data.php">
					<input type="submit" value="Details" class="btn btn-success mx-auto" style="float: right;">
					</form>
                    <p>Latest</p>
                </div>
                <table id="choose-address-table" class="ui-widget ui-widget-content">
                    <ul>
					<tr>
<th>Id</th>
<th>State</th>
<th>Type</th>
<th>Last update</th>
</tr>
<?php
$sql = "SELECT * FROM report_data where assigned_by='' ORDER BY id DESC  limit 10";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$url = $row  ['image'];
				echo "<td>" . $row["report_id"]. "</td>";
				echo "<td>". $row["state"] . "</td>";
				echo "<td>". $row["type"] . "</td>";
				echo "<td>". date("d/m/Y", strtotime($row["updated_at"]))."</td>";
				echo "</tr>";
}
} else { 
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "</tr>";
}
?>
                    </ul>
                </table>
            </div>
            <div class="col">
			<div class="m-1 bg-secondary">
                <div class="row-2">
					<form action ="Investigation_table.php">
					<input type="submit" value="Details" class="btn btn-success mx-auto" style="float: right;">
					</form>
                    <p class="px-2">Investigation</p>
                </div>
                <table id="choose-address-table" class="ui-widget ui-widget-content">
                    <ul>
					<tr>
<th>Id</th>
<th>State</th>
<th>Type</th>
<th>Last update</th>
</tr>
<?php
$sql = "SELECT * FROM report_data where assigned_by='$login_session' AND status='Investigation' ORDER BY id DESC  limit 4";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
				echo "<td>".$row["report_id"]. "</td>";
				echo "<td>". $row["state"] . "</td>";
				echo "<td>". $row["type"] . "</td>";
				echo "<td>". date("d/m/Y", strtotime($row["updated_at"]))."</td>";
				echo "</tr>";
} 
} else { 
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "</tr>";
}
?>
                    </ul>
                </table>
			</div>
                <div class="m-1 bg-danger">
                    <div class="row-2">
					<form action ="Ongoing_table.php">
					<input type="submit" value="Details" class="btn btn-success mx-auto" style="float: right;">
					</form>
                     <p class="px-2">Ongoing</p>
                    </div>
                <table id="choose-address-table" class="ui-widget ui-widget-content">
                    <ul>
					<tr>
<th>Id</th>
<th>State</th>
<th>Type</th>
<th>Last update</th>
</tr>
<?php
$sql = "SELECT * FROM report_data where assigned_by='$login_session' AND status='Ongoing' ORDER BY id DESC  limit 4";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$url = $row  ['image'];
				echo "<td>" . $row["report_id"]. "</td>";
				echo "<td>". $row["state"] . "</td>";
				echo "<td>". $row["type"] . "</td>";
				echo "<td>". date("d/m/Y", strtotime($row["updated_at"]))."</td>";
				echo "</tr>";
}
} else { 
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "</tr>";
				}
?>
                    </ul>
                </table>
				</div>
			</div>
			
                <div class="col m-2 bg-warning">
                    <div class="row-2">
					<form action ="Completed_table.php">
					<input type="submit" value="Details" class="btn btn-success mx-auto" style="float: right;">
					</form>
                        <p>Completed</p>
                    </div>
					<div class="row">
                <table id="choose-address-table" class="ui-widget ui-widget-content">
                    <ul>
					<tr>
<th>Id</th>
<th>State</th>
<th>Type</th>
<th>Last update</th>
</tr>
<?php
$sql = "SELECT * FROM report_data where status='Completed' ORDER BY updated_at DESC  limit 10";
$result = $con->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$url = $row  ['image'];
				echo "<td>" . $row["report_id"]. "</td>";
				echo "<td>". $row["state"] . "</td>";
				echo "<td>". $row["type"] . "</td>";
				echo "<td>". date("d/m/Y", strtotime($row["updated_at"]))."</td>";
				echo "</tr>";
}
} else { 
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "<td>NULL</td>";
				echo "</tr>";
}
?>
                    </ul>
                </table>
				</div>
                </div>
            </div>
        </div>
        <div class="row">
            <form action='search_session.php' method='POST' class="m-auto">
                <div class="form-group">
                    <div class="row m-2">
                        <input type="text" name='report_id'class="form-control" id="report_id" placeholder="report_id">
                    </div>
            
                    <div class="row m-2">
                        <button type="submit" class="btn btn-primary mx-auto">Search</button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>

    <div class="footer">
        <p>Contact Information</p>
      </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>