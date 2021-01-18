<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>insert or retrieve data from mysql with ajax</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <form class="comment_form" style="background-color:#80aba8;">
      <div>
      <h1><center>Insert your Data</center></h1>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
      </div>
      <div>
        <label for="comment">Comment:</label>
        <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
      </div>
      <button type="button" id="submit_btn">POST</button>
      <button type="button" id="update_btn" style="display:none;">UPDATE</button>
 <button type="button" id="display_btn"><a href="http://localhost/ajax/display.php">Display in the table</a></button>
    </form>
    <div class="wrapper" style="background-color:#adc9c7;">
    <?php echo $comments; ?>
    <div id="display_area">
      <span class="delete">delete</span>
      <span class="edit">edit</span>
    </div>  
  </div>
</body>
</html>
<script src="jquery.min.js"></script>
<script src="scripts.js"></script>