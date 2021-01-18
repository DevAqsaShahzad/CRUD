<?php
$conn=mysqli_connect('localhost','root','','ajax');
if(!$conn)
{
    die('Error:'.mysqli_error($conn));
}
if(isset($_POST['save']))
{
    $name=$_POST['name'];
    $comment=$_POST['comment'];
    $sql="INSERT INTO comments(name,comment) VALUES('{$name}','{$comment}')";
    if(mysqli_query($conn,$sql))
    {
        $id=mysqli_insert_id($conn);
        $saved_comment='<div class="comment_box">
        <span class="delete" data-id="' .$id .'">delete</span>
        <span class="edit" data-id="' .$id .'">edit</span>
        <div class="display_name">' .$name .'</div>
        <div class="comment_text">' .$comment .'</div>
        </div>';
        echo $saved_comment;
    }
    exit();
}
if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $id=$_POST['id'];
    $comment=$_POST['comment'];
    $sql="UPDATE comments set name='{$name}',comment='{$comment}' WHERE id=" .$id;
    if(mysqli_query($conn,$sql))
    {
        $id=mysqli_insert_id($conn);
        $updated_comment='<div class="comment_box">
        <span class="delete" data-id="' .$id .'">delete</span>
        <span class="edit" data-id="' .$id .'">edit</span>
        <div class="display_name">' .$name .'</div>
        <div class="comment_text">' .$comment .'</div>
        </div>';
        echo $updated_comment;
    }
    exit();
}
if(isset($_GET['delete'])){
    $id=$_GET['id'];
    $sql="DELETE FROM comments WHERE id=" .$id;
    mysqli_query($conn,$sql);
    exit();
}
$sql="SELECT * FROM comments";
$results=mysqli_query($conn,$sql);
$comments='<div id="display_area">';
while($row=mysqli_fetch_array($results))
{
    $comments .='<div class="comment_box">
    <span class="delete" data-id="' .$row['id'].'">delete</span>
    <span class="edit" data-id="' .$row['id'].'">edit</span>
    <div class="display_name">' .$row['name'] .'</div>
    <div class="comment_text">' .$row['comment'] .'</div>
    </div>';
}
$comments .='</div>'
?>