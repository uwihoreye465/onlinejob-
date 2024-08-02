

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
      margin-left: 200px;
      border-color: blue;
      box-shadow: -1px 20px 20px -6px rgba(0, 0, 0, 0.9);
    }
    table, td, th{
      padding: 3px;
      border-collapse: collapse;
      border: 1px solid black;
    }
    td{
      font-size: 16px;
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
    img{
      width: 40%;
      height: 7%;
    }
    
  </style>
</head>
<body class="alert alert-info">
 <table>
      <h2>applicationviwer</h2>
      <button class="btn btn-dark"> <a href="dash.php" style="text-decoration: none;">Back</a></button>
    <tr>
     <th>id</th>
     <th>fullname</th>
     <th>email</th>
     <th>resume</th>
     <th>job_title</th>
     <th>job_type</th>
     <th>experience</th>
      <th>skills</th>
      <th>created_at</th>
      <th>Action</th>


    </tr>
    <?php
       $con=mysqli_connect("localhost","root","","jobonline");
       $select=mysqli_query($con,"SELECT* from jobseekerw");
        while ($row=mysqli_fetch_array($select)) {
           
         ?>

        <tr>
          <td><?php echo $row['id']?></td>
          <td><?php echo $row['fullname']?></td>
          <td><?php echo $row['email']?></td>
          <td> <img src="<?php echo $row['resume']?>"> </td>
            <td><?php echo $row['job_title']?></td>
          <td><?php echo $row['job_type']?></td>
          <td><?php echo $row['experience']?></td>
          <td><?php echo $row['skills']?></td>
          <td><?php echo $row['created_at']?></td>
          <td>
            <a href="deleteapplication.php?id=<?php echo $row['id']?>"><button class="delete">delete</button></a>
        
          </td>

        </tr>
       
        
        <?php

        } 
    ?>
  </table>

</body>
</html>
    