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
$sql="SELECT * FROM  form";
$result=$conn->query($sql);
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

    table, th, td {
  border: 1px solid black;
  text-align:center;
}
body{
    background-image: url("images.jpg");
    background-repeat: repeat;
    background-position: center;
    background-size: cover;
    height:100%;
    padding:50px;
    margin:50px;
    
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
      color:
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
       
<table> <h1>Contact Data</h1>
<tr> 
    <th>id</th> 
<th>firstname</th>
<th>lastname</th>
<th>country</th>
<th>subject</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($result))

    {
        ?>
       <tr>
       <td><?php echo $row['id']?></td>
       <td><?php echo $row['firstname']?></td>
       <td><?php echo $row['lastname']?></td>
       <td><?php echo $row['country']?></td>
       <td><?php echo $row['subject']?></td>
       </tr>
<?php
    }
?>

</table>   



</body>
</html>