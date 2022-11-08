<?php
include('conn.php');
if(isset($_REQUEST['id'])){
    $sql="SELECT * FROM newsupload WHERE id='$_REQUEST[id]'";
    $result = mysqli_query($conn, $sql);

?>

<?php
$sql = "DELETE FROM newsupload WHERE id=$_REQUEST[id]";
if(mysqli_query($conn, $sql)){
    echo"<script>alert('NEWS DELETED')
    location.href='table.php'</script>";
}
else{
    echo"Error deleting record:".mysql_error($conn);
}
}
mysqli_close($conn);
?>