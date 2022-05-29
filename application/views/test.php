<!DOCTYPE html> 
<html>
<head>
    <meta charset="utf-8">   
    <title>Update Users</title>
</head>
<body>
       <h3>UPDATE USER</h3>

       <?php //print_r($updateData['emp_id']); ?>
 
       <br>
       <form method="post" action= "<?php echo base_url()."Login/update"?>" >
              <br>
          Username : <input type="text" name="username" value="<?php echo $this->session->userdata("users")['username']; ?>">
                <?php echo form_error("name"); ?>
                First Name : <input type="text" name="firstname" value="<?php echo $this->session->userdata("users")['firstname']; ?>">
                <?php echo form_error("name"); ?>
          Password: <input type="password" name="password" value="<?php echo $this->session->userdata("users")['password']; ?>">
                <?php echo form_error("email"); ?>
 
                
          <input type="submit" value="UPDATE">
       </form> 
</body>
</html> 