

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
  <title></title>
  <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }
 
    table{
      margin-left: 350px;
      box-shadow: -1px 20px 20px -6px rgba(0, 0, 0, 0.9);
    }
    table, td, th{
      padding: 10px;
      border-collapse: collapse;
      border: 1px solid black;
    }
    td{
      font-size: 18px;
      cursor: pointer;
      background-color: white;
    }
    th{
      background: black;
      color: white;
    }
    .delete{
      width: 60px;
      height: 20px;
      color: white;
      background: red;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    .update{
      width: 60px;
      height: 20px;
      color: white;
      background:  #3498DB;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    h2{
      text-align: center;
      color: blue;
      background-color: white;
    }
    
  </style>
</head>
<body class="alert alert-info">
  <table>
      <h2>users</h2>
      <a href="recuiter.php"><button class="alert alert-primary">add Recruiter</button></a>
    <tr>
      <th>RecruiterID</th>
      <th>CompanyName</th>
      <th>email</th>
      <th>telephone</th>
    </tr>
    <?php
       $con=mysqli_connect("localhost","root","","jobonline");
       $select=mysqli_query($con,"SELECT* from recruiter");
        while ($row=mysqli_fetch_array($select)) {
           
         ?>

        <tr>
        <td><?php echo $row['RecruiterID']?></td>
          <td><?php echo $row['CompanyName']?></td>
          <td><?php echo $row['email']?></td>
          <td><?php echo $row['telephone']?></td>
          <td>
            <a href="deleterecuiter.php?user_id=<?php echo $row['user_id']?>"><button class="delete">delete</button></a>
            <a href="updateuserrecuiter.php?user_id=<?php echo $row['user_id']?>"><button class="update">update</button></a>
          </td>

        </tr>
       
        
        <?php

        } 
    ?>
  </table>

</body>
</html>
    