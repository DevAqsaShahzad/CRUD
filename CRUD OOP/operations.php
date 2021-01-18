<?php   
require_once('./dbconfig.php');
$db=new dbconfig();
class operations extends dbconfig
{
    public function Store_Record()
    {
        global $db;
        if(isset($_POST['btn_save']))
        {
            $FirstName=$db->check($_POST['First']);
            $LastName=$db->check($_POST['Last']);
            $UserName=$db->check($_POST['UserName']);
            $UserEmail=$db->check($_POST['UserEmail']);
        if($this->insert_record($FirstName,$LastName,$UserName,$UserEmail))
        {
            echo '<div class="alert alert-success"> Your Record has been saved:)</div>';
        }
        else
        {
            echo '<div class="alert alert-success"> Failed :)</div>';
        }
        }

    }
    function insert_record($a,$b,$c,$d)
    {
        global $db;
        $query="insert into oop(FirstName,LastName,UserName,Email) values('$a','$b','$c','$d')";
        $result=mysqli_query($db->connection,$query);
        if($result)
        {
                 return true;
        }
        else
        {
          return false; 
        }
         
   }
   // view record 
   public function view_record()
   {
       global $db;
       $query="SELECT * from oop";
       $result=mysqli_query($db->connection,$query);
       return $result;
   }
   // edit record
   public function get_record($id)
   {
    global $db;
    $query="SELECT * from oop where id='$id'";
    $data=mysqli_query($db->connection,$query);
    return $data;
   }
   // update 
   public function update()
   {
    global $db;
   
    if(isset($_POST['btn_update']))
    {
        $id=$_POST['id'];
        $FirstName=$db->check($_POST['First']);
        $LastName=$db->check($_POST['Last']);
        $UserName=$db->check($_POST['UserName']);
        $Email=$db->check($_POST['UserEmail']) ;
        if($this->update_record($id,$FirstName,$LastName,$UserName ,$Email))
        {
            $this->set_message('<div class="alert alert-success">your record has been updated:</div>');
            header("location:view.php"); 
        }
       else
       {
        $this->set_message('<div class="alert alert-success">something wrong:</div>');  
       }
    }
   }
   //update function 2
   public function update_record($id,$First,$Last,$User,$Email)

    {
      global $db;
      $sql="update oop set FirstName='$First', LastName='$Last',UserName='$User',Email='$Email' WHERE id='$id' ";
      $result=mysqli_query($db->connection,$sql);
      if($result)
      {
          return true;
      }
      else{
          return false; 
      }
  }

   
   //message session
   public function set_message($msg)
   {
       if(!empty($msg))
       {
           $_SESSION ['Message']=$msg;
       }
       else{
           $msg="";
       }
    }
       //display message
       public function  display_message()
       {
       if(isset($_SESSION['Message']))
       {
           echo $_SESSION['Message'];
           unset($_SESSION['Message']);
       }
    }
    //delete record
    public function delete_record($id)
    {
          global $db;
          $query="delete from oop where id='$id' ";
          $result=mysqli_query($db->connection,$query);
          if($result)
          {
              return true;
          }
          else
          {
              return false; 
          }
      }
    
   
}
?>