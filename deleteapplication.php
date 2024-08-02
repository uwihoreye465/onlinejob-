<?php
$con=mysqli_connect("localhost","root","","jobonline");
    $a=$_GET['id'];
        $delete=mysqli_query($con,"DELETE FROM  jobseekerw where id='$a'");
        if($delete==true){
            echo "<script>alert ('jobseeker are deleted')</script>"; 
                    }

        else{
            echo "<script>alert ('jobseeker are deleted')</script>"; 

        }
    ?>
    