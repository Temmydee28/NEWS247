<?php
include('session.php');
include('db.php');
$id = 1;
$sql="SELECT * FROM register WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>
<?php 
include('db.php');
if (isset($_REQUEST['id'])) {
   $sql="SELECT*FROM register WHERE id='$_REQUEST[id]'";
   $result=mysqli_query($conn,$sql);
   $rows=mysqli_fetch_array($result);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
<body>
    <?php include('menu.php'); ?>
<div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Update News</h3>
                                
                                <form role="form" method="post" >
                                    <?php 
                                    include('db.php');
                                    if (isset($_REQUEST['update'])) {
                                        $name=$_REQUEST['name'];
                                        $email=$_REQUEST['email'];
                                        $phone=$_REQUEST['phone'];
                                        $gender=$_REQUEST['gender'];
                                        $sql="UPDATE `register` SET `name`= '$name',`email`= '$email',`phone`= '$phone',`gender`= '$gender' WHERE id='$_REQUEST[id]'";
                                        $result=mysqli_query($conn,$sql);
                                        if ($result) {
                                            echo "<script>alert('Update successful')
                                            location.href='table_data_tables.php'</script>";
                                    }
                                    else {
                                        echo "Error updating record!".mysqli_error($conn);
                                    }
                                }                                
                                    ?> 
                                    <div class="form-group"><label>Name</label>
                                    <input type="name" name="name" value="<?php echo $row['name']; ?>" class="form-control">
                                </div><br><br>
                                    <div class="form-group"><label>Email</label>
                                    <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control">
                                </div><br><br>
                                    <div class="form-group"><label>Phone</label>
                                    <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control">
                                </div><br><br>
                                
                                    <div class="form-group"><label>Gender</label>
                                    <input type="text" name="gender" value="<?php echo $row['gender']; ?>" class="form-control">
                                    
                                </div><br><br>
                                    <div>
                                        <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit" name="update" onclick="return confirm('are you sure to submit')"><strong>Update record</strong></button>
                                        
                                    </div>
                                </form>
                            </div>
</body>
</html>