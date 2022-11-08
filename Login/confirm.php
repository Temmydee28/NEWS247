
<?php
	require('conn.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['otp'])){

		$otp    = stripslashes($_REQUEST['otp']); // removes backslashes
		$otp    = mysqli_real_escape_string($conn,$otp); //escapes special characters in a string
		

	//Checking if user existing in the database or not
        $sql = "SELECT * FROM `otp` WHERE otp='$otp'";
		$result = mysqli_query($conn,$sql) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['otp'] = $otp;
			echo '<script type="text/javascript"> window.open("login14.php","_self");</script>'; // Redirect user to index.php
            }{
    echo "<script>alert('Invalid OTP')
	location.href='confirm.php'</script>";
   }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ioform</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme14.css">
</head>
<body>
    <form method="post">

    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <h3>Confirm Your Email</h3>
                        <p>To confirm your e-Mail, enter the email address you use to sign in to iofrm</p>
                         <form method="post">
                            <input class="form-control" type="tel" name="phone" placeholder="Phone Number">
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required="">
                            <div class="form-button full-width">
                                <button id="submit" type="submit"  class="ibtn btn-forget">Confirm e-Mail</button>
                            </div>
                        </form> 
                    </div> 
                    <div class="form-sent">
                        <div class="website-logo-inside">
                            <a href="index.html">
                                <div class="logo">
                                    <img class="logo-size" src="images/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="tick-holder">
                            <div class="tick-icon"></div>
                        </div>
                        <h3>OTP SENT</h3>
                        <p>Please check your inbox <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7e1711180c133e1711180c130a1b130e121f0a1b501711">[email&#160;protected]</a></p>
<form method="post">
                       <input type="number" name="otp" id="otp">
                       <button type="submit" name="submit">Confirm</button>
</form>
                        <div class="info-holder">
                            <span>Unsure if that email address was correct?</span> <a href="#">We can help</a>.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>