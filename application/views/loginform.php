  <!DOCTYPE html>
<html> 
    <head>
        <title>User Login Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css ">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js "> </script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js "></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js "></script>

      <style >
          
      </style>
    </head>

    <body>
        <center><img src= "https://i.pinimg.com/474x/3d/88/8f/3d888ffcdf8eb1930e11c99f64cc5e52--real-estate-logo-real-estates.jpg" height="300px" width="500px"></center>
        <center><b><h1><i>happyhomes.com</i></h1></b></center>
        <div class="container mt-5">
         <div class="row"><h4><?php //echo $msg ; ?></div>
            <div class="row">
               
               <div class="col-md-6 login-form-1 bg-info  ">
                    <center><h3>LOGIN FORM</h3></center>

                       <!-- <div class="card-body text-dark"> -->
                        <form method="post" action="<?php echo base_url()."Login/userformcheck"?>" >

                        <div class="form-group">
                            <label><b>Username</b></label>
                            <input type="text" name="username" placeholder="Enter Your Username" class="form-control">
                        </div>

                        <div class="form-group">
                            <label><b>Email</b></label>
                            <input type="email" name="email" placeholder="Enter Your Email Address" class="form-control">
                        </div>

                        <div class="form-group">
                            <label><b>Password</b></label>
                            <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <center><input type="submit" name="Login" class="btn btn-success"></center>
                        </div>
                        </form>
                 </div>


                    <div class="col-md-6 login-form-2">
                    <center><h3>ADMIN FORM</h3></center>

                    
                        <form method="post" action="<?php echo base_url()."Login/adminformcheck"?>" >

                        <div class="form-group">
                            <label><b>Username</b></label>
                            <input type="text" name="username" placeholder="Enter Your Username" class="form-control">
                        </div>

                        <div class="form-group">
                            <label><b>Email</b></label>
                            <input type="email" name="email" placeholder="Enter Your Email Address" class="form-control">
                        </div>

                        <div class="form-group">
                            <label><b>Password</b></label>
                            <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
                        </div>
                        <div class="form-group">
                            <center><input type="submit" name="Login" class="btn btn-success"></center>
                        </div>
                        </form>
                    </div>
                </div>
                </div>
                <?php if(!empty($this->session->userdata("error"))){ ?>
                <div class="alert alert-info alert-dismissible">
                <?php echo $this->session->userdata("error"); ?>

                <button type="button" class = "close" data-dismiss = "alert">&times;</button>
            </div>
            <?php } ?>

            <?php if(!empty($this->session->userdata("loginerror"))){ ?>
                <div class="alert alert-danger alert-dismissible">
                <?php echo $this->session->userdata("loginerror"); ?>

                <button type="button" class = "close" data-dismiss = "alert">&times;</button>
            </div>
            <?php } ?>

        </div>
    </div>


    </body>
</html>
