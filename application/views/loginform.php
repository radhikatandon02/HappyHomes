<!DOCTYPE html> 
<html>  
    <head> 
        <title>User Login Form</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

      <style >

        
        .container-fluid{
            width : 90%;
        }


        .imgtop{
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .card-header{
            background-color: black;
            color: white;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }


      </style>
    </head>
 
    <body>
        <br><br>
        <center><img class="imgtop" src="https://firebasestorage.googleapis.com/v0/b/happyhomes-1234.appspot.com/o/0001-9127767020_20211002_123156_0000.jpg?alt=media&token=7d2df522-280e-491e-a7eb-52dad6e5e0bb" alt="test image" width="1100px" height="200px"></center>
        <br>
        <div class="container-fluid">
            
            <div class="card-header"> 
           <h1 style="font-size:20px; height: 20px; font-family:sans-serif;" ><b><center>Login / Sign Up </center></b></h1>
            </div>
            <br><br>
            <div class="row">

                <div class="col-md-1"></div>
            
               <div class="col-md-5 login-form-1 bg-light">
                        <form method="post" action="<?php echo base_url()."Login/userformcheck"?>" >
                        <br>
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
                      
                
                <div class="col-md-5 login-form-2 ">

                    <center><img src="https://firebasestorage.googleapis.com/v0/b/happyhomes-1234.appspot.com/o/login.jpg?alt=media&token=74f621dd-a93f-4ab1-af5f-b4a12a8606b0" height="360px" width="400px">
                    </center>
                </div>
            </div>
                
                <br><br>
                <center><h5>Do not have an account?<a href="<?php echo base_url()."Login/register"?>"> Sign Up</a></h5></center>
                <br>

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
</div> 


    </body>
</html>
