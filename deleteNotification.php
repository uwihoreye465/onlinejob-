<?php
$con=mysqli_connect("localhost","root","","jobonline");
    $a=$_GET['NotificationID'];
        $delete=mysqli_query($con,"DELETE FROM  notification where NotificationID='$a'");
        if($delete==true){
            echo "<script>alert ('Notification are deleted')</script>"; 
                    }

        else{
           echo "<script>alert ('Notification are not deleted')</script>"; 

        }
    ?>
    