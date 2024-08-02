<?php
$con=mysqli_connect("localhost","root","","jobonline");
    $a=$_GET['RecruiterID'];
        $delete=mysqli_query($con,"DELETE FROM  recruiter where RecruiterID='$a'");
        if($delete==true){
            echo "<script>alert ('recruiter are deleted')</script>"; 
                    }

        else{
            echo "<script>alert ('recruiter are deleted')</script>"; 

        }
    ?>
    