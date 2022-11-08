 <?php
 session_start();
ini_set('display_errors', '1');
// 	require 'includes/PHPMailer.php';
// 	require 'includes/SMTP.php';
// 	require 'includes/Exception.php';
// //Define name spaces
// 	// use PHPMailer\PHPMailer\PHPMailer;
// 	// use PHPMailer\PHPMailer\SMTP;
// 	// use PHPMailer\PHPMailer\Exception;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme14.css">
</head>
<body>
<form method="post" enctype="multipart/form-data">
   
    
<?php
$rand = rand(1000,5000);
$randd = rand(1000,3000);
$ootp = $randd;
$d = date("y");
$ID="AUO".$d."AC".$rand;
include('conn.php');

    if(isset($_REQUEST['submit'])){
    $username=trim(addslashes($_REQUEST['username']));
    $phone = trim(addslashes($_REQUEST['number']));
    $emailreg=trim(addslashes($_REQUEST['email']));
    $uin= trim(addslashes($_REQUEST['uin']));
    $otp= trim(addslashes($_REQUEST['otp']));
    $today=date('Y-m-d');
   
   $_SESSION['uin']=$uin;
    $passwordreg=trim(addslashes($_REQUEST['password'])); 
    
    // $passport = $_FILES["passport"]['name'];
    // $target="passport/";
    // $target = $target.$_FILES["passport"]['name'];
    // if(move_uploaded_file($_FILES["passport"]['tmp_name'],$target)>0){
     

    $check=mysqli_query($conn, "SELECT * FROM register WHERE phone ='$phone' OR email = '$emailreg'");
    $checkrows = mysqli_num_rows($check);
    if($checkrows>0){
 
     echo "<script>alert('Record already exit in DB')
         location.href = 'register.php'</script>";
 }
 else{

    //    $email = "animasauntemidayoprosper@gmail.com";
    //  $password = "Tolulope@15";
    // $message = "YOUR ONE TIME OTP $otp"; //16 character
    // $sender_name = "BAYMAS INST"; //11 character
    // $recipients = "$phone";
    // $forcednd =1;
  
    // $data = array("email" => $email, "password" => $password,"message"=>$message, "sender_name"=>$sender_name,"recipients"=>$recipients,"forcednd"=>$forcednd);
    // $data_string = json_encode($data);
    // $ch = curl_init('https://api.bulksmslive.com/v2/app/sms');
    // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    // curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_string)));
    // $result = curl_exec($ch);
    // $res_array = json_decode($result);
    // print_r($res_array);

     $sql = "INSERT INTO register(username,phone,password,email) VALUES('$username','$phone',PASSWORD('$passwordreg'),'$emailreg')";

     $sql2= "INSERT INTO otp(uin,username,otp,status) VALUES('$uin','$username','$otp', 'UNVERIFIED')";


    mysqli_query($conn,$sql) or die(mysqli_error($conn)); 
    $num = mysqli_insert_id($conn);
    if(mysqli_affected_rows($conn)!=1){
        $message="Error inserting record into DB";
    }
    else{
        echo "<script>alert('$lastname Registration Successful')
        location.href = 'index.php'</script>";
    }


      $result = mysqli_query($conn,$sql2);
      if($result){

    //  //Create instance of PHPMailer
    //     $mail = new PHPMailer();
    // //Set mailer to use smtp
    //     $mail->isSMTP();
    // //Define smtp host
    //     $mail->Host = "mail.wetindeycodeacademy.com.ng";
    // //Enable smtp authentication
    //     $mail->SMTPAuth = true;
    // //Set smtp encryption type (ssl/tls)
    //     $mail->SMTPSecure = "tls";
    // //Port to connect smtp
    //     $mail->Port = "587";
    // //Set gmail username
    //     $mail->Username = "techbeast@wetindeycodeacademy.com.ng";
    // //Set gmail password
    //     $mail->Password = "Tolulope@15";
    // //Email subject
    //     $mail->Subject = "Your ONE TIME OTP";
    // //Set sender email
    //     $mail->setFrom('techbeast@wetindeycodeacademy.com.ng');
    // //Enable HTML
    //     $mail->isHTML(true);
    // //Attachment
    
    
    // //Email body
    //     $mail->Body ="$otp";
    // //Add recipient
    //     $mail->addAddress("$emailreg");
    // //Finally send email
    //     if ( $mail->send() ) {
            echo "<script>alert('$lastname record submitted successfully')</script>";
    
       }  
    }
    }
 

?>
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
                        <h3>Get more things done with Loggin platform.</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <div class="page-links">
                            <a href="index.php">Login</a><a href="register.php" class="active">Register</a>
                        </div>
                       
                             <!-- <input type="file" name="passport" required accept="jpg;jpeg;png;PNG;JPG;JPEG"> -->
                        <input class="lineUp" type="text" name="otp" value="<?php echo $ootp;?>" hidden>
                        <input class="lineUp" type="text" name="uin" placeholder="UIN" value="<?php echo $ID;?>">
                        
                            
                            <input class="form-control" type="text" name="username" placeholder="User Name" required>
                            <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                            <input class="form-control" type="number" name="number" placeholder="Phone Number">
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" name="submit" type="submit" class="ibtn">Register</button></a>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or register with</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a><a href="#"><i class="fab fa-google"></i></a><a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

<script type="text/javascript">

var submit=document.getElementById('submit');

if(submit=)



</script>
</body>
</html>