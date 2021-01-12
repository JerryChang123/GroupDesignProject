<?php
session_start();
include 'data_connection.php';
include 'search_report.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
    <title>GDP</title>
</head>

<body style="background-color: aquamarine;">
    <nav class="navbar navbar-light bg-success">
        <a href="#" class="navbar-brand">
            <img src="JKR.jpeg" alt="Group " width="30" height="30" class="d-inline-block align-top" loading="lazy"> Goverment Camera Report (GDP 19)
        </a>
    </nav>
	<form action="updatesql.php" method="POST" enctype="multipart/form-data">
    <div class="container my-3">
        <div class="row">
            <div class="col">
                <div class="row bg-secondary">
                    <p class="m-auto text-capitalize">UPDATE</p>
                </div>
						Status:
						<select name="status" id="status">
							<option value="Investigation">Investigation</option>
							<option value="Ongoing">Ongoing</option>
							<option value="Completed">Completed</option>
						</select>
					
                <div class="m-2" style="background-color: lightcyan">
                    <div class="row">
                        <p class="px-4">Cause Of Problem:<input type="text" name="reason" class="form-control" id="reason"  placeholder="Reason" value=<?php echo "'$reason'";?>></p>
                    </div>
                   <!-- <div class="row">
                        <ul>
                            <li>Description</li>
                        </ul>
                    </div>-->
                </div>


                <div class="m-2" style="background-color: lightcyan">
                    <div class="row my-2">
					
                        <p class="px-4"><label  for="Cost" >Repair Cost:</label></p>
						<p><input type="text" name="cost" class="form-control" id="cost" value=<?php echo "$cost";?>></p>
                    </div>
                </div>

                <div class="m-2" style="background-color: lightcyan">
                    <div class="row">
                        <p class="px-4">Estimated Complete Date:</p>
						<p>	<input type="date" name="estimate" class="form-control" id="estimate" value=<?php echo "$estimate_complete";?>></p>
                    </div>
                </div>
				
				 <div class="m-2" style="background-color: lightcyan">
            <div class="row">
                <p class="px-4">Additional Note:</p>
            </div>
            <div class="row">
                <ul>
                    <input type="text" name="note" class="form-control" id="note" size="50" value=<?php echo "'$note'";?>>
                </ul>
            </div>
			</div>
			
			                <div class="m-2" style="background-color: lightcyan">
                    <div class="row">
                        <p class="px-4">Image After Repair:</p>
                    </div>
                    <div class="row">
                        <ul>
                            
						<input type='file' name="imgstaff" id="imgstaff" accept="image/*" />
						<img id="blah" src=<?php echo "$staff_image";?> alt="your image" width="300" height="300"/>

                        </ul>
                    </div>



                </div>

            </div>

            <div class="col">
                <p>Date update:<?php echo "$date_updated";?></p>
                <div class="m-2 bg-primary">

                    <div class="row bg-secondary">
                        <p class="m-auto text-capitalize">Problem Information</p>
                    </div>


                </div>
                <div class="m-2" style="background-color: thistle">
                    <div class="row">
                        <p class="px-4">Type Of Service:<?php echo "$type";?></p>
                    </div>
                    <div class="row">
                        <p class="px-4">Complexity:<?php echo "$severity";?></p>
                    </div>
                    <div class="row">
                        <p class="px-4">Location:<?php echo "$location";?></p></p>
                    </div>
                    <div class="row">
                        <p class="px-4">Assignee:<?php echo "$assigned_by";?></p></p>
                    </div>
                    <div class="row">
                        <p class="px-4">Description:<?php echo "$description";?></p>
                    </div>
					<div class="row">
					<p class="px-4">Image on site:</p>
                    <p><img src=<?php echo "$image";?> style="float:center" width="300" height="300"></p>
                    </div>
                </div>
            </div>
        </div>
		<p>
		<button formaction="details.php" type="submit" class="btn btn-success m-auto">BACK</button>
		<button type="submit" class="btn btn-success m-auto" style="float:right">UPDATE</button>
		</form>
		</p>










		<script>
		document.getElementById('status').value =<?php echo "'$status'";?>;
		function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgstaff").change(function() {
  readURL(this);
});
		</script>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
		
        <!-- JS, Popper.js, and jQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>