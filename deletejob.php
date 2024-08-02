<?php
$con = mysqli_connect("localhost", "root", "", "jobonline");
  $i=$_GET['JobID'];
  $delete=mysqli_query($con,"DELETE FROM job WHERE JobID='$i'");
  if ($delete==true) {
   echo "<script>alert('job are Deleted')</script>";
  }else{
    echo "<script>alert('job not Deleted')</script>";
  }

?>
