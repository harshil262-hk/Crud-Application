<html>
<head>
<title>My Form</title>
<link rel="stylesheet"  type= "text/css" href="style.css">
<style>
    form{
        text-align: center;
    }
    .submit{
        margin-top: 30px;
        
    }
   .hii{
    background-color: whitesmoke;
  color: black;
  padding: 3px 3px;
  text-decoration: none;
  border-color :1 black;
   }
   .hrx{
      background-color: orange;
   }
</style>



</head>

<body class="hrx">

<?php echo validation_errors(); ?>

    <form method="post" action="<?php echo base_url().'index.php/Register/index';?>"  >


<div>
<label>
<h5>Email Address</h5>
</label>
<input type="text" name="email" value="<?php echo set_value('email');?>" size="50" required/>
<?php echo form_error('email')?>
    <label>
<h5>Name</h5>
   </label>
<input type="text" name="Name" value="<?php echo set_value('Name');?>" size="50" required />
<?php echo form_error('Name')?>
<label>
<h5>Age</h5>
</label>
<input type="text" name="Age" value="<?php echo set_value('Age');?>" size="50" required />
<?php echo form_error('Age')?>
<label>
<h5>Password</h5>
</label>

<input type="text" name="password" value="<?php echo set_value('password');?>" size="50" required/>
<?php echo form_error('password')?>
<br>
<br>

<label for="subject">Choose a subject:</label>
<?php echo form_error('subject')?>

<select name="subject" id="subject">
 <option></option> 
  <option value="DATASTRUCTURE">DATASTRUCTURE</option>
  <option value="PYTHON">PYTHON</option>
  <option value="CLOUD APPLICATION">CLOUDCOMPUTING</option>
  <option value="C++">c++</option>
</select>   

</div>


<div class="submit">
    <input type="submit" value="Submit" />
     <a class="hii" href="<?php echo base_url().'index.php/Register/cric';?>">Cancle</a>
    
</div>

</form>

</body>
</html>




