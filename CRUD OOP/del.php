<?php
 require_once('./dbconfig.php');
 $db=new operations();
if(isset($_GET['D_ID']))
{
    global $db;
    $id=$_GET['D_ID'];
 if($db->delete_record($id))
  {
      $db->set_message('<div class="alert alert-denger">Your record has been deleted</div>');
      header("location:view.php");
  }
  else
  {
    $db->set_message('<div class="alert alert-denger">Something wrong</div>');

  }
} 

?>