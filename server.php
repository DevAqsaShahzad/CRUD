<?php
    session_start();
    $mysqli = new mysqli('localhost','root', '', 'crud') or die(mysqli_error($mysqli));
    $name = '' ;
    $password = '' ;
    $email = '' ;
    $address= '' ;
    $id = 0; 
    $update = false ;
    
    if (isset($_POST['add'])){
        $name= $_POST['username'];
        $password= $_POST['password'];
        $email=$_POST['email'];
        $address=$_POST['address'];
        
        $mysqli->query("INSERT INTO data(name, password,email, address) VALUES('$name', '$password', '$email','$address')") or 
        die($mysqli->error);
        
        $_SESSION['message']= "Record has been saved!";
        $_SESSION['msg_type'] = "success";
        header("location: index.php");
    }
    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error);
        $_SESSION['message']= "Record has been deleted!";
        $_SESSION['msg_type'] = "danger";
        header("location: index.php");
    }

    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $result=$mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error);
        $update = true;
        if(count($result)==1){
            $row = $result->fetch_array();
            $name = $row['name'];
            $password = $row['password'];
            $email = $row['email'];
            $address = $row['address'];

        }
    }

    if (isset($_POST['update'])){
        $id = $_POST['id'];
        $name = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $mysqli->query("UPDATE data SET name = '$name', password = '$password', email = '$email', address = '$address' WHERE id=$id ") or 
        die($mysqli->error);
        $_SESSION['message']= "Record has been updated!";
        $_SESSION['msg_type'] = "warning";
        header("location: index.php");
    }

?>