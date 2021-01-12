<?php
session_start();
include 'data_connection.php';
include 'search_report.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!--
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
-->
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>GDP</title>
</head>
<body style="background-color: aquamarine;">
    <nav class="navbar navbar-light bg-success">
        <a href="#" class="navbar-brand">
            <img src="JKR.jpeg" alt="Group Image" width="30" height="30" class="d-inline-block align-top" loading="lazy">
            Goverment Camera Report (GDP 19)
        </a>
    </nav>
    <div class="container my-3">
        <div class="row bg-light">
            <p class="m-auto text-capitalize">REPORT DETAILS</p>
        </div>
        <div class="row">
            <div class="col">
                <div class="row my-3">
                    <div class="row">
                        <b>Date Created:<?php echo "$date_created";?></b>
                    </div>
                    <div class="row w-100" style="background-color:gold">
						<div class="col">ID:</div>
                        <div class="col"><b><?php echo "$report_id";?></b></div>
						
                    </div>
                </div>
                <div class="row my-3">
                    <div class="row bg-warning w-100" >
                        <div class="col">Type of Facility:</div>
                        <div class="col"><b><?php echo "$report_id";?></b></div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="row bg-warning w-100">
                        <div class="col">Severity of Damage:</div>
                        <div class="col"><b><?php echo "$severity";?></b></div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="row bg-warning w-100">
                        <div class="col">Description:</div>
                        <div class="col"><b><?php echo "$description";?></b></div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="row bg-warning w-100">
                        <div class="col">State:</div>
                        <div class="col"><b><?php echo "$state";?></b></div>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="row bg-warning w-100">
                        <div class="col">Location:</div>
                        <div class="col"><b><?php echo "$location";?></b></div>
                    </div>
                </div>
				<div class="row my-3">
                    <div class="row bg-warning w-100">
                        <div class="col">Report by:</div>
                        <div class="col"><b><?php echo "$created_by";?></b></div>
                    </div>
                </div>
				
		<p>Image on site:</p>
		<p><img src=<?php echo "$image";?> width="300" height="300"></p>
            </div>
			
            <div class="col m-3" style="background-color:lemonchiffon">
                <div class="row">
                    <p>Log update:</p>
				</div>
					<div class="row">
						<p>Last updated: <b><?php echo "$date_updated";?></b></p>
					</div>
					<div class="row">
						<p>Assigned By: <b><?php echo "$assigned_by";?></b></p>
					</div>
					<div class="row">
						<p>Status: <b><?php echo "$status";?></b></p>
					</div>
					<div class="row">
						<p>Cause of Problem: <b><?php echo "$reason";?></b></p>
					</div>
					<div class="row">
						<p>Repair Cost: <b><?php echo "$cost";?></b></p>
					</div>
					<div class="row">
						<p>Estimate Complete Date: <b><?php echo "$estimate_complete";?></b></p>
					</div>
					<div class="row">
						<p>Additional Note: <b><?php echo "$note";?></b></p>
					</div>
					<div class="row">
						<p>Image after repaired:</p>
					</div>
					<div class="row">
						<p style="text-align:center;"><img src=<?php echo "$staff_image";?> width="250" height="250"></p>
					</div>
            </div>
        </div>
		<p>
		<form action="update.php">
		<button formaction="home.php" type="submit" class="btn btn-success m-auto">BACK</button>
		<button type="submit" class="btn btn-success m-auto" style="float:right">UPDATE</button>
		</form>
		</p>
    </div>
	

    

</body>
</html>