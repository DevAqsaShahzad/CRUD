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
if(isset($_POST['submit']))
{
     $id=$_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $country=$_POST['country'];
    $subject=$_POST['subject'];
    $sql="INSERT INTO form(id,firstname,lastname,country,subject) VALUES('$id','$firstname','$lastname','$country','$subject')";
    if(mysqli_query($conn,$sql))
    {
            echo "information send";

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

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;
    background-color:  #e5eecc;
}

input[type=text], select, textarea {
  width: 100%;
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
  margin-left: 480px;
  margin-right: 480px;
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
       

<p id="test"></p>

<div class="container">
    <h3>Contact Form</h3>
  <form action="http://localhost/wt/form.php" method="Post">
    <label for="id">id</label>
    <input type="text" id="id" name="id" placeholder="enter id..">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

   <input type="submit" value="Submit" name="submit">
 
  </form>
</div>

</body>
</html>