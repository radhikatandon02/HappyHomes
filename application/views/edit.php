<!DOCTYPE html>
<html> 
       <head>
              <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

              <title>Update</title>

              <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
              <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
              <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

 
        <style> 
        
              ul{
              list-style-type: none; /*to remove bullets*/ 
                
           width: 200px;
              
              } 
              li a{ 
                     display: block;
                     text-decoration: none;   /*to display menu bar in a block way and apply colour and modify the top and bottem using padding*/
                     
                     padding: 12px 18px;
              }
              li a:hover{
              background: lightblue; /*to hover over the menu bar*/
              }
                     
                     * {
                       box-sizing: border-box;
                     }

                     #myInput {
                       background-image: url('/css/searchicon.png');
                       background-position: 10px 12px;
                       background-repeat: no-repeat;
                       width: 60%;
                       font-size: 20px;
                       padding: 12px 20px 12px 40px;
                       border: 1px solid #ddd;
                       margin-bottom: 12px;
                     }

                     #myUL {
                       list-style-type: none;
                       padding: 0;
                       margin: 0;
                     }

                     #myUL li a {
                       border: 1px solid #ddd;
                       margin-top: -1px; /* Prevent double borders */
                       background-color: #f6f6f6;
                       padding: 12px;
                       text-decoration: none;
                       font-size: 18px;
                       color: black;
                       display: block
                     }

                     #myUL li a:hover:not(.header) {
                       background-color: #eee;
                     }
                     
                     .container-fluid{
                            width : 90%;
                     }

                     .imgtop{
                          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                     }

                      #user{
                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                     }

                     #nav{
                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                            padding: 20px;
                     }

                     .table{
                            width: 95%;
                            font-size: 16px;
                            border-radius: 13px;
               
                     }

                     #nav2{
                            padding: 10px;
                            height: 620px;
                     }

                     input{
                            width: 90%;
                     } 

              </style>

        </head>

       <body>
              <br><br>
        <center><img class="imgtop" src="https://firebasestorage.googleapis.com/v0/b/happyhomes-1234.appspot.com/o/0001-9127767020_20211002_123156_0000.jpg?alt=media&token=7d2df522-280e-491e-a7eb-52dad6e5e0bb" alt="test image" width="1100px" height="200px"></center>
        <br>
              

       <div class="container-fluid">                           <!-- 1 Open--> 
              

              <div class="card-header" id="user">
                            <h2><center><?php $name = $this->session->userdata("users")['firstname']; ?>
                                                 <?php $lname = $this->session->userdata("users")['lastname']; ?>
                            
                            Welcome <?php echo $name ?>&nbsp<?php echo $lname ?></center></h2>
               </div>                                                        <!-- 3 Close-->

              <div class="card-body">

                     
                     <div class="row" id="nav">
                            <div class="col-sm-4">
                            <nav class="navbar-py-5" >
                            <ul class="navbar-nav bg-dark" id="nav2">

                         <li class="nav-item active" >
                           <center><a class="nav-link" href="<?php echo base_url()."Login/userformcheck"; ?>">My Profile</a></center>
                         </li>
                         <li class="nav-item">
                           <center><a class="nav-link" href="<?php echo base_url()."Login/edit"?> ">Edit</a></center>
                         </li>
                         
                         <li class="nav-item">
                           <center><a class="nav-link" href="<?php echo base_url()."Login/support"?>">Support and Help</a></center>
                         </li>
                         <li class="nav-item">
                           <center><a class="nav-link" href="<?php echo base_url()."Login/tandc"?>">Terms & Conditions</a></center>
                         </li>
                         
                         <li class="nav-item">
                            <center><a class ="nav-link" href="<?php echo base_url()."Login/logout"; ?>">Logout</a></center>
                         </li>
                         <br><br><br><br><br><br><br><br><br><br><br><br>
                         <li> <center><p style="font-size:40px; color:white">. . .</p></center>
                         </li>
                        
                            </ul>
                            </nav>
                            </div>

                     <div class="col-sm-8">

                     <h3>Update your Information</h3>
                     <form method="post" action= "<?php echo base_url()."Login/update"?>" >
                     <table class="table">
                         <br> 
                           
                     <tr>
                            <td><b>Username </b></td>
                            <td><input type="text" name="username" value="<?php echo $this->session->userdata("users")['username']; ?>">
                                   <?php echo form_error("name"); ?></td>
                     </tr>
                     <tr>
                            <td><b>First Name </b></td>
                            <td><input type="text" name="firstname" value="<?php echo $this->session->userdata("users")['firstname']; ?>">
                                   <?php echo form_error("name"); ?></td>
                     </tr>
                     <tr>
                            <td><b>Last Name </b></td>
                            <td><input type="text" name="lastname" value="<?php echo $this->session->userdata("users")['lastname']; ?>">
                                   <?php echo form_error("name"); ?></td>
                     </tr>
                     <tr>
                            <td><b>Password </b></td>
                            <td><input type="text" name="password" value="<?php echo $this->session->userdata("users")['password']; ?>">
                                   <?php echo form_error("email"); ?></td>
                     </tr>
                     <tr>
                            <td><b>Address </b></td>
                            <td><input type="text" name="address" value="<?php echo $this->session->userdata("users")['address']; ?>">
                                   <?php echo form_error("name"); ?></td>
                     </tr>
                            
                     <tr>
                            <td><b>Contact no.</b></td>
                            <td><input type="text" name="contactno" value="<?php echo $this->session->userdata("users")['contactno']; ?>">
                                   <?php echo form_error("name"); ?></td>
                     </tr>
                            
                    

                     </table>

                     <center><input type="submit" value="UPDATE" style="width: 30%;"></center>

                     </form>

                     </div>
                     </div>
              </div>
       </div>                                                         <!-- 1 Close-->
                     
       </body>
</html>