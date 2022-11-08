<?php
include('session.php');
include('conn.php');
// $id = 1;
// $sql="SELECT * FROM register WHERE id='$id'";
// $result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
// $rows=mysqli_fetch_array($result);
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
                            <h6 class="mb-4">NEWS UPLOAD</h6>
                            <form method="post" enctype="multipart/form-data">



<?php
$rand =rand(100,3000);
$d = date("y");
$ID="AUO".$d."AC".$rand;

if(isset($_REQUEST['submit'])){
    $author=trim(addslashes($_REQUEST['author']));
    
    $headlines= trim(addslashes($_REQUEST['headline']));
    $content= trim(addslashes($_REQUEST['content']));
    $photocredit= trim(addslashes($_REQUEST['photocredit']));
    $embed= trim(addslashes($_REQUEST['embed']));
    $category= trim(addslashes($_REQUEST['category']));
    $link= trim(addslashes($_REQUEST['link']));
    $postview= trim(addslashes($_REQUEST['postview']));
    $uin= trim(addslashes($_REQUEST['uin']));


    $passport = $_FILES["coverphoto"]['name'];
     $target="../passport/";
    $target = $target.$_FILES["coverphoto"]['name'];
   if(move_uploaded_file($_FILES["coverphoto"]['tmp_name'],$target)>0){


    $sql ="INSERT INTO newsupload(uin,author,headline,content,coverphoto,photocredit,embed,category,link,postview) 
    VALUES('$uin','$author','$headlines','$content','$passport','$photocredit','$embed','$category','$link','$postview')";

   mysqli_query($conn,$sql) or die(mysqli_error($conn)); 
   $num = mysqli_insert_id($conn);
   if(mysqli_affected_rows($conn)!=1){
       $message="Error inserting record into DB";
   }
   else{
       echo "<script>alert('News Successful Uploaded')
       location.href = 'index.php'</script>";
   }
}



}



?>


                               
                                <div class="mb-3">
                                    <label for="exampleInputAuthor1" class="form-label">UIN</label>
                                    <input type="text" name='uin'value=" <?php echo $ID ?> " class="form-control" id="exampleInputAuthor1">  
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputAuthor1" class="form-label">Author</label>
                                    <input type="text" name='author' class="form-control" id="exampleInputAuthor1" >  
                                </div>
                               
                                <div class="mb-3">
                                    <label for="exampleInputHeadine1" class="form-label">Headline</label>
                                    <input type="text"  name='headline' class="form-control" id="exampleInputHeadline1" >  
                                </div>
                                <div class="form-floating">
                                 <textarea class="form-control" name="content" id="floatingTextarea" style="height: 150px;"></textarea>
                                 <label for="floatingTextarea">Content</label>
                               </div>
                               <div class="mb-3">
                                  <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                  <input class="form-control bg-dark" name="coverphoto" type="file" id="formFileMultiple" multiple="">
                               </div>
                               <div class="mb-3">
                                    <label for="exampleInputphotocredit1" class="form-label">Photo Credit</label>
                                    <input type="text" name='photocredit' class="form-control" id="exampleInputphotocredit1" >  
                                </div>
                                <div class="mb-3">
                                    <label for="exampleEmbed1" class="form-label">Embed</label>
                                    <input type="text" name='embed' class="form-control" id="exampleInputEmbed1" >  
                                </div>
                                <br>
                               <div >
                                   <select name="category" class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
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
                                    <input type="text" name='link' class="form-control" id="exampleInputLink1" >  
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPostview1" class="form-label">Postview</label>
                                    <input type="number" name="postview" class="form-control" id="exampleInputPostview1">
                                </div>
                              
                                <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
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