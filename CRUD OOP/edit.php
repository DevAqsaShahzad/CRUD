<?php 
    require_once('./dbconfig.php');
    $db=new operations();
    $db->update();
    $id=$_GET['U_ID'];
   $result=$db->get_record($id);
   $data=mysqli_fetch_assoc($result);
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
           <div class="col-lg-6 m-auto">
             <div class="card mt-5">
               <div class="card-header " style="background-color:#a8927d;">
               <h1 style="color:white;"><center>Update your Data</center></h1>
               </div>
               <?php $db->Store_Record();?> 
                    <div class=" card-body" style="background-color:#635343;">
                    <form method="POST" >
                    <input type="hidden" name="id" value="<?php echo $data['id'];?>" >
                    <label for="fname" style="color:white;">First Name:</label>
                    <input type ="text" name="First" placeholder="enter first name" class="form-control mb-2" required value="<?php echo $data['FirstName'];?>">
                    <label for="lname" style="color:white;">Last Name:</label>
                    <input type ="text" name="Last" placeholder="enter Last name" class="form-control mb-2" required value="<?php echo $data['LastName'];?>">
                    <label for="lname" style="color:white;">User Name:</label>
                    <input type ="text" name="UserName" placeholder="enter User name" class="form-control mb-2" required value="<?php echo $data['UserName'];?>"> 
                    <label for="lname" style="color:white;">User Email:</label>
                    <input type ="text" name="UserEmail" placeholder="enter User Email" class="form-control mb-2" required value="<?php echo $data['Email'];?>" >
                  
                    </div>
                    <div class="card-footer">
                    <button class="btn btn-success" name="btn_update" style="background-color:#635343;">Update</button>
             
                </form>
                </div>
<div class="pagination" style="background-color:#e9f2e9;">
  <a href="#">&laquo;</a>
  <a href="http://localhost/OOP/view.php#">Previous page</a>
  <a href="#">&raquo;</a>
  <a href="#">&laquo;</a>
  <a class="active" href="http://localhost/oop/edit.php">3</a>
  <a href="#">&raquo;</a>
  <a href="#">&laquo;</a>
</div>
               </div>
            </div>
        </div>
    </div>
    </body>
    </html>