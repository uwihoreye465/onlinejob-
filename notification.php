

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
      background:tomato;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }
    .update{
      width: 60px;
      height: 20px;
      color: white;
      background:blue;
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
      
     <button class="btn btn-dark"> <a href="dash.php" style="text-decoration: none;">Back</a></button>
    <tr>
      <th>NotificationID</th>
      <th>email</th>
      <th>telphone</th>
      <th>Message</th>
    </tr>
    <?php
       $con=mysqli_connect("localhost","root","","jobonline");
       $select=mysqli_query($con,"SELECT* from notification");
        while ($row=mysqli_fetch_array($select)) {
  
         ?>
        <tr>
        <td><?php echo $row['NotificationID']?></td>
          <td><?php echo $row['email']?></td>
          <td><?php echo $row['telphone']?></td>
          <td><?php echo $row['Message']?></td>
          <td>
            <a href="deleteNotification.php?NotificationID=<?php echo $row['NotificationID']?>"><button class="delete">delete</button></a>
          </td>
        </tr>
        <?php
        } 
    ?>
  </table>

</body>
</html>
    