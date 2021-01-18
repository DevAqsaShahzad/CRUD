<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CRUD Operations using CodeIgniter </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <?php echo link_tag('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'); ?>
  
<script src="<?php echo base_url('https://code.jquery.com/jquery-1.11.1.min.js'); ?>"></script>
<script src="<?php echo base_url('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('https://getbootstrap.com/dist/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
<div class="navbar navbar-dark bg-dark">
    <div class="container">
            <a href="#" class="navbar-brand">CRUD Application</a>
    </div>
</div>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>Read Record | CRUD Operations using CodeIgniter</h3> <hr />
<!--- Success Message --->
<?php if ($this->session->flashdata('success')) { ?> 
<p style="font-size: 20px; color:green"><?php echo $this->session->flashdata('success'); ?></p>
<?php }?>
<!---- Error Message ---->
<?php if ($this->session->flashdata('error')) { ?>
<p style="font-size: 20px; color:red"><?php echo $this->session->flashdata('error'); ?></p>
 <?php } ?> 

<a href="<?php echo site_url('insert'); ?>">
<button class="btn btn-primary"> Insert Record</button></a>
<div class="table-responsive">                
<table id="mytable" class="table table-bordred table-striped">                 
<thead>
<th>#</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Contact</th>
<th>Address</th>
<th>Posting Date</th>
<th>Edit</th>
<th>Delete</th>
</thead>
<tbody>    
<?php 
$cnt=1;
foreach($result as $row)
{               
?>  
    <tr>
    <td><?php echo htmlentities($cnt);?></td>
    <td><?php echo htmlentities($row->FirstName);?></td>
    <td><?php echo htmlentities($row->LastName);?></td>
    <td><?php echo htmlentities($row->EmailId);?></td>
    <td><?php echo htmlentities($row->ContactNumber);?></td>
    <td><?php echo htmlentities($row->Address);?></td>
    <td><?php echo htmlentities($row->PostingDate);?></td>
    <td>
<?php 
//for passing row id to controller
echo  anchor("Read/getdetails/{$row->id}",' ','class="btn btn-primary btn-xs glyphicon glyphicon-pencil"')?>
</td>
<td>
<?php 
//for passing row id to controller
echo anchor("Delete/index/{$row->id}",' ','class="glyphicon glyphicon-trash btn-danger btn-xs"')?>
</td>
</tr>
<?php 
// for serial number increment
$cnt++;
} ?>
</tbody>      
</table>
</div>
</div>
</div>
</div>
</body>
</html>