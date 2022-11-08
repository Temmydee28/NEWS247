<?php
include('session.php');
include('conn.php');
$id = 1;
$sql="SELECT * FROM newsupload WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NEWS INVENTORY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../css2.css?family=Open+Sans:wght@300;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="../ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="../npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- <div class="container-fluid position-relative d-flex p-0">
       Spinner Start 
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


<?php
include('menu.php');

?>

            <!-- Table Start -->
            <div class="container pt-1 px-1">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-1">
                            <h6 class="mb-5">News Edit</h6>
                            <div class="table-responsive">
                                <table class="table table-dark">
                                    <thead>
                                        <tr>
                                            <th scope="col">S/N</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Author</th>
                                            <th scope="col">Headline</th>
                                            <th scope="col">Content</th>
                                            <th scope="col">Cover Photo</th>
                                            <th scope="col">Photo Credit</th>
                                            <th scope="col">Embed</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Postview</th>
                                            <th scope="col">link</th>
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>


                                    <?php 
include('conn.php'); 
 if($_POST){
    $search=$_POST['search'];
    $sql ="SELECT * FROM newsupload WHERE `headline` LIKE '%".$search."%' OR author='$search' ";

    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            

            
    
     ?>
                                    <tbody>
                                        <tr>
                                        
                                      
                                            <td><?php echo $row['id'];?></td>
                                            <td> <?php echo $row['time'];?></td>
                                            <td> <?php echo $row['author'];?></td>
                                            <td> <?php echo $row['headline'];?></td>
                                            <td> <?php echo $row['content'];?></td>
                                            <td>  <img alt="image" class="img-circle" src="../passport/<?php echo $row['coverphoto']; ?> "height="48px"/></td>
                                            <td> <?php echo $row['photocredit'];?></td>
                                            <td> <?php echo $row['embed'];?></td>
                                            <td> <?php echo $row['category'];?></td>
                                            <td> <?php echo $row['postview'];?></td>
                                            <td> <?php echo $row['link'];?></td>
                                            <td>
                                            <div class="btn-group" role="group">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Action
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="edit.php">Edit</a></li>
      <li><a class="dropdown-item" href="newsupdate.php?id=<?php echo $row['id'];?>">Update</a></li>
      <li><a class="dropdown-item" href="delete.php?id=<?php echo $row['id'];?>">Delete</a></li>
    </ul>
  </div>
                                            </td>
                                        </tr>
  
                                        <?php
 }
}
    }


// else{
//     echo "<script>alert('ooops! record not found in database')
//     location.href='index.php'</script>";
// }
?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
<?php
include('footer.php');
?>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="../jquery-3.4.1.min.js"></script>
    <script src="../npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>