<?php
include('session.php');
include('conn.php');
$id = 1;
$sql="SELECT * FROM register WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>
<?php 
include('conn.php');
if (isset($_REQUEST['id'])) {
   $sql="SELECT*FROM newsupload WHERE id='$_REQUEST[id]'";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../css2.css?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
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


 <!-- Form Start -->
 
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">NEWS UPDATE</h6>
                            <form method="post" enctype="multipart/form-data">



<?php
include('conn.php');
if(isset($_REQUEST['update'])){
    $author=trim(addslashes($_REQUEST['author'])); 
    $headlines= trim(addslashes($_REQUEST['headline']));
    $content= trim(addslashes($_REQUEST['content']));
    $photocredit= trim(addslashes($_REQUEST['photocredit']));
    $embed= trim(addslashes($_REQUEST['embed']));
    $date= trim(addslashes($_REQUEST['date']));
    $category= trim(addslashes($_REQUEST['category']));
    $link= trim(addslashes($_REQUEST['link']));
    $postview= trim(addslashes($_REQUEST['postview']));
    $uin= trim(addslashes($_REQUEST['uin']));


    $passport = $_FILES["coverphoto"]['name'];
     $target="../passport/";
    $target = $target.$_FILES["coverphoto"]['name'];
   if(move_uploaded_file($_FILES["coverphoto"]['tmp_name'],$target)>0){

    $sql ="UPDATE `newsupload` SET `date`='$date', `uin`='$uin',`author`='$author',`headline`='$headlines',`content`='$content',`coverphoto`='$passport',`photocredit`='$photocredit',`embed`='$embed',`category`='$category',`link`='$link',`postview`='$postview'  WHERE id='$_REQUEST[id]'";
   $result=mysqli_query($conn,$sql);
                                        if($result){
                                            echo "<script>alert('Update successful')
                                            location.href='table.php'</script>";
                                    }
                                    else {
                                        echo "Error updating record!".mysqli_error($conn);
                                    }
                                }
                            }
                              
?>  

                       <div class="mb-3">
                            <label for="exampleInputdate1" class="form-label">DATE</label>
                            <input type="date" name='date' value="<?php echo $row['date'];?>" class="form-control" id="exampleInputdate1" >  
                        </div>
                                <div class="mb-3">
                                    <label for="exampleInputAuthor1" class="form-label">UIN</label>
                                    <input type="text" name='uin'value=" <?php echo $row['uin']; ?>" class="form-control" id="exampleInputAuthor1">  
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputAuthor1" class="form-label">Author</label>
                                    <input type="text" name='author' value="<?php echo $row['author'];?>" class="form-control" id="exampleInputAuthor1" >  
                                </div>
                               
                                <div class="mb-3">
                                    <label for="exampleInputHeadine1" class="form-label">Headline</label>
                                    <input type="text"  name='headline' value="<?php echo $row['headline'];?>" class="form-control" id="exampleInputHeadline1" >  
                                </div>
                                <div class="form-floating">
                                 <textarea class="form-control" value=<?php echo $row['content'];?> name="content" id="floatingTextarea" style="height: 150px;"></textarea>
                                 <label for="floatingTextarea">Content</label>
                               </div>
                               <div class="mb-3">
                                  <label for="formFileMultiple"value="<?php echo $row['coverphoto'];?>" class="form-label">Multiple files input example</label>
                                  <input class="form-control bg-dark" name="coverphoto" type="file" id="formFileMultiple" multiple="">
                               </div>
                               <div class="mb-3">
                                    <label for="exampleInputphotocredit1" class="form-label">Photo Credit</label>
                                    <input type="text" name='photocredit' value="<?php echo $row['photocredit'];?>" class="form-control" id="exampleInputphotocredit1" >  
                                </div>
                                <div class="mb-3">
                                    <label for="exampleEmbed1" class="form-label">Embed</label>
                                    <input type="text" name='embed' value="<?php echo $row['embed'];?>" class="form-control" id="exampleInputEmbed1" >  
                                </div>
                                <br>
                               <div >
                                   <select name="category" value="<?php echo $row['category'];?>" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                                     <option selected="">---Category---</option>
                                      <option value="Politics">Politics</option>
                                      <option value="Sport">Sport</option>
                                      <option value="Health">Health</option>
                                      <option value="Lifestyle">Lifestyle</option>
                                      <option value="Science">Science</option>
                                      <option value="World">World</option>


                                   </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputLink1" class="form-label">Link</label>
                                    <input type="text" name='link' value="<?php echo $row['link'];?>" class="form-control" id="exampleInputLink1" >  
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPostview1" class="form-label">Postview</label>
                                    <input type="number" name="postview" value="<?php echo $row['postview'];?>" class="form-control" id="exampleInputPostview1">
                                </div>
                              
                                <button type="submit" name="update" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Form End -->
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