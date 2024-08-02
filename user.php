

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
      border-color: blue;
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
      color: white;
      background-color: black;
    }
    
  </style>
</head>
<body class="alert alert-white">
  <table>
      <h2> Detail of users</h2>
    <button class="btn btn-dark"> <a href="dash.php" style="text-decoration: none;">Back</a></button>
    <tr>
     <th>user_id</th>
     <th>id_card</th>
     <th>emails</th>
     <th>password</th>
     <th>Action</th>


    </tr>
    <?php
       $con=mysqli_connect("localhost","root","","jobonline");
       $select=mysqli_query($con,"SELECT* from users");
        while ($row=mysqli_fetch_array($select)) {
           
         ?>

        <tr>
          <td><?php echo $row['user_id']?></td>
          <td><?php echo $row['id_card']?></td>
          <td><?php echo $row['emails']?></td>
          <td><?php echo $row['password']?></td>
          <td>
            <a href="deleteuser.php?user_id=<?php echo $row['user_id']?>"><button class="delete">delete</button></a>
            <a href="updateuser.php?user_id=<?php echo $row['user_id']?>"><button class="update">update</button></a>
          </td>
        </tr>
        <?php

        } 
    ?>
  </table>

</body>
</html>
    