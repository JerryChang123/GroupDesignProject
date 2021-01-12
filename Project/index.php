<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: home.php"); // Redirecting To Profile Page
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <div class="container">
        <div class="row m-3">
            <div class="col m-2">
                <div class="row">
                    <div class="m-auto">
                        <img src="JKR.jpeg" alt="Group Image" >
                    </div>
                </div>
                <div class="row my-3">
                    <p class="text-center m-auto font-weight-bold">Welcome to goverment <br/>camera report</p>
                </div>                
            </div>

            <div class="col m-2" style="background-color: azure;">
                <div class="m-3">
                    <div class="row">
                        <h3>
                            <b class="text-sm">LOG IN</b>
                        <!--</h3>
                        <div class="mx-3 pt-1">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" style="width: 20px; height: 20px;"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>
                        </div>-->
                    </div>
					
                    <div class="row">This is a secure system and you will need to provide your login details to access the site</div>
                    <div class="my-4">
					<form action="" method="post">
                            <div class="form-group">
                                <div class="row m-2">
                                    <input name="username" type="text" class="form-control" id="name" placeholder="Username">
                                </div>
                                <div class="row m-2">
                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                </div>
                        
                                <div class="row m-2">
                                    <input name="submit" type="submit" value="Login" class="btn btn-danger mx-auto" style="width:200px">
                                </div>
                                 
                            </div>
                        </form>
						<form action ="registration_form.html">
                        <div class="row m-2">
                            <button name="submit" type="submit" class="btn btn-success mx-auto" style="width:200px">Create New Account </button>
						</div>
						</form>
						<span style="color:red"><?php echo $error; ?></span>
                    </div>
                </div>
                
                

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>