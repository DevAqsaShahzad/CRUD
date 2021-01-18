<?php
$servername="localhost";
$username="root";
$password="";
$dbname="form";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("unable to connect database:".mysqli_connect_error());
}
if(isset($_POST['del']))
{
    $id=$_POST['id'];
    $sql="DELETE FROM form where id='$id'";


if(mysqli_query($conn,$sql))
    {
            echo "deleted";

    }
    else{
    echo "error".mysqli_error($conn);
    }
    mysqli_close($conn);
    
}


?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="sports.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="   https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js">

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <style>
    
    
}
ul
      {float:right;
      list-style-type:none;
      }
      ul li
      {
      display:inline-block;
      color:white;
      }
      ul li a
      {
      text-decoration:none;
      color:;
      padding:4px 10px;
      border: 1px solid black;
      transition:.4s ease;
      }
      .active {
        background-color: steelblue;
      }
      

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;
    background-color:  #e5eecc;
}

input[type=text], select, textarea {
  width: 20%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: steelblue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-align: center;
}

input[type=submit]:hover {
  background-color: black;
}

.container {
  border-radius: 5px;
  background-color: steelblue;
  padding: 20px;
  margin-left: 150px;
  margin-right: 150px;
}
ul
      {float:right;
      list-style-type:none;
      }
      ul li
      {
      display:inline-block;
      color:white;
      }
      ul li a
      {
      text-decoration:none;
      color:;
      padding:4px 10px;
      border: 1px solid black;
      transition:.4s ease;
      }
    
</style>
</head>
<body>
<nav class="navbar navbar-default bg-dark" id="demo">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="#"><b>Sports.com<b></a>
              </div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="sports.html">Home</a></li>
                <li><a href="sports.html">About</a></li>
                <li><a href="http://localhost/wt/form.php">Contact</a></li>
                <li><a href="http://localhost/wt/display.php">Display</a></li>
                <li><a href="http://localhost/wt/del.php">Delete</a></li>
                <li><a href="http://localhost/wt/edit.php">Edit</a></li>
                <li><a href="submit.html">message</a></li>
              </ul>
            </div>
          </nav>
       
<div class="container">
<h1>Delete Data</h1>
<form action="http://localhost/wt/del.php" method="Post">
    ID TO DELETE:<input type="text" name="id" required><br>
    <input type="submit" name="del" value="clear data"><br>
    
</form>
</div>
</body>
</html>