 <?php

                                    //username       password              database
    $conn = new mysqli("localhost","Techbeast","123","newsblog");

    if(mysqli_connect_errno()){
        printf("connect failed: %s\n", mysqli_connect_error());

        exit();
    }
 ?>

