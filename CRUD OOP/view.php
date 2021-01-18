<?php 
    require_once('./dbconfig.php');
    $db=new operations();
    $result=$db->view_record();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="  X-UA-Compatible" content="ie-edge">
    <link rel="stylesheet"  href="CSS/bootstrap.css">
    <title>Crud Operation in php using OOP</title>
    <style>
    .big-dark
        {
            background-image: url("1.jpg");
            background-position:cover;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .pagination {
  display: inline-block;
}

.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.pagination a.active {
  background-color: #635343;
  color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

    </style>

</head>
<body class="big-dark">
    <div class="container">
        <div class="row">
            <div class="col">
                 <div class="card">

                   <div class="card-header" style="background-color:#a8927d;">
           <h1 style="color:white;"><center>Records</center></h1>
           </div>
             <div class="card-body" style="background-color:#635343;">
           <?php $db->display_message();
         $db->display_message();?>
           <table class="table table-bordered ">
           <tr style="background-color:#e9f2e9;">
           <td style="width:10%">ID</td>
           <td style="width:20%">First Name</td>
           <td style="width:20%">Last Name</td>
           <td style="width:25%">User Name</td>
           <td style="width:25%">User Email </td>
           <td style="width:20" colspan="2">Operations</td>
           </tr>
           <tr>
           <?php
           while($data=mysqli_fetch_assoc($result ) )
           {
            ?>
            <td style="color:white;"><?php echo $data['id']?></td>
            <td style="color:white;"><?php echo $data['FirstName']?></td>
            <td style="color:white;"><?php echo $data['LastName']?></td>
            <td style="color:white;"><?php echo $data['UserName']?></td>
            <td style="color:white;"><?php echo $data['Email']?></td>
            <td><a href="edit.php?U_ID=<?php echo $data['id']?>" class="btn btn-success">Edit</a></td>
            <td><a href="del.php?D_ID=<?php echo $data['id']?>" class="btn btn-danger  ">Delete</a></td>
     </tr>
     <?php
           } 
     
     ?>
           </table>
                    </div>
<div class="pagination" style="background-color:#e9f2e9;">
  <a href="#">&laquo;</a>
  <a href="http://localhost/OOP/oop.php#">Previous page</a>
  <a href="#">&raquo;</a>
  <a href="#">&laquo;</a>
  <a class="active" href="http://localhost/oop/view.php">2</a>
  <a href="#">&raquo;</a>
  <a href="#">&laquo;</a>
  <a href="http://localhost/oop/edit.php">Next Page</a>
  
  <a href="#">&raquo;</a>
</div>
                  </div>
             </div>
        </div>
    </div>
    </body>
    </html>