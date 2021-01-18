<?php 
    require_once('./dbconfig.php');
    $db=new operations();
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
<body class="big-dark"  background="1.jpg ">
    <div class="container" >
        <div class="row" >
           <div class="col-lg-6 m-auto">
             <div class="card mt-5">
               <div class="card-header " style="background-color:#a8927d;">
               <h1 style="color:white;"><center>Insert your Data</center></h1>
               </div>
               <?php $db->Store_Record();?> 
                    <div class=" card-body" style="background-color:#635343;">
                    <form method="POST" >
                    <label for="fname" style="color:white;">First Name:</label>
                    <input type ="text" name="First" placeholder="Enter first name" class="form-control mb-2" require="required">
                    <label for="lname" style="color:white;">Last Name:</label>
                    <input type ="text" name="Last" placeholder="Enter last name" class="form-control mb-2" require="required">
                    <label for="lname" style="color:white;">User Name:</label>
                    <input type ="text" name="UserName" placeholder="Enter user name" class="form-control mb-2" require="required">
                    <label for="lname" style="color:white;">User Email:</label>
                    <input type ="text" name="UserEmail" placeholder="Enter User Email" class="form-control mb-2" require="required">
                  
                    </div>
                    <div class="card-footer" >
                    <button class="btn btn-success" name="btn_save" style="background-color:#635343;">save</button>
                   
             
                </form>
                </div>
                <center>
<div class="pagination" style="background-color:#e9f2e9;">
  <a href="#">&laquo;</a>
  <a href="http://localhost/OOP/oop.php#">1</a>
  <a href="#">&raquo;</a>
  <a href="#">&laquo;</a>
  <a class="active" href="http://localhost/oop/view.php">Next Page</a>
  <a href="#">&raquo;</a>
 
               </div>
</center>
            </div>
        </div>
    </div>
    </body>
    </html>