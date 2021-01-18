<?php
$servername="localhost";
$username="root";
$password="";
$dbname="ajax";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("unable to connect database:".mysqli_connect_error());
}
$sql="SELECT * FROM  comments";
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
    background: #80aba8;
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
<center><table> <h1> Data</h1>
<tr> 
    <th>id</th> 
<th>name</th>
<th>comment</th>

</tr>
<?php
while($row=mysqli_fetch_assoc($result))

    {
        ?>
       <tr>
       <td><?php echo $row['id']?></td>
       <td><?php echo $row['name']?></td>
       <td><?php echo $row['comment']?></td>
      
       </tr>
<?php
    }
?>

</table>   </center>



</body>
</html>