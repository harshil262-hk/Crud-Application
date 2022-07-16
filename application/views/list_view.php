<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>crud</title>
    <link rel="stylesheet"  type= "text/css" href="style.css">
    <link rel="stylesheet"  type= "text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css ';?>">
</head>
<body>
    <div class ="navbar navbar-dark bg-dark">
        <div class ="container">
            <a href="#" class = "navbar-brand"> CRUD APPLICATION</a>
        </div>
    </div>
    <div class ="container" style="padding-top: 10px;">



    <div class = "row">
    <div class="col-md-12">
        <div class="row">
        <div class="col-md-12"><h3> view Users</h3> </div>
      <div class="col-md-12 text-right">
        <a href="<?php echo base_url().'index.php/Register/index/';?>"class= "btn btn-primary">Create</a>
    </div>

        </div>
        <div>

        </div>
        <hr>
    </div> 
</div>
<div class ="row"> 
    
    <div class="col-md-12">
        <table class="table table-stripted">
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>subject</th>
               <!--<th>Age</th>-->
                <th width="100">EDIT</th>
                <th width="100">DELETE</th>
            </tr>

            <?php  if(!empty($users))  {foreach( $users as $users) {?>
            <tr>
                   
                    <td><?php  echo $users['user_id']?> </td>
                    <td><?php  echo $users['name']?></td>
                    <td><?php  echo $users['email']?></td>
                    <td><?php  echo $users['subject']?></td>
                    <!--<td><?php  echo $users['Age']?></td>-->
                    
                    <td> <a href="<?php echo base_url().'index.php/Register/edit/'.$users['user_id']?>"class="btn btn-primary">Edit</a> </td>
                    <td> <a href="<?php echo base_url().'index.php/Register/delete/'.$users['user_id']?>"class="btn btn-danger">DELETE</a> </td>
                   
            </tr>
            <?php  }} else  {?>

                <tr>
                    <td colspan="7">Records not found</td>
                </tr>

                <?php }?>
    

        </table>
    </div>
</div>


</div>
    
</body>
</html