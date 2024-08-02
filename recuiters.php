<?php
$con=mysqli_connect("localhost","root","","onlinejobs");
if (isset($_POST['insert'])) {
    $RID=$_POST['RecruiterID'];
    $CompanyName=$_POST['CompanyName'];
    $email=$_POST['emails'];
    $tel=$_POST['telephone'];
        $create=mysqli_query($con,"INSERT INTO recruiter VALUES('$RID','$CompanyName','$email','$tel','')");
        if($create==true){
            echo "SUCCESSSFUL TO REGISTER";
        }
        else{
            echo " NOT SUCCESSSFUL TO REGISTER";
        }
    }
    #......................select.....................
    $a1=$b1=$c1=$d1='';
    if (isset($_POST['select'])) {
    $a=$_POST['RecruiterID'];
    $b=$_POST['CompanyName'];
    $c=$_POST['emails'];
    $d=$_POST['telephone'];
$sel=mysqli_query($con,"SELECT * FROM recruiter where RecruiterID='$a'");
if (mysqli_num_rows($sel)>0) {
    while ($fetch=mysqli_fetch_array($sel)) {
    $a1=$fetch['RecruiterID'];
    $b1=$fetch['CompanyName'];
    $c1=$fetch['emails'];
    $d1=$fetch['telephone']; 
    if ($sel==true){
        echo "selected";
    }
    else{
        echo "not selected";
    }
    }  
    }
}
?>