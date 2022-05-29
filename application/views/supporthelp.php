<!DOCTYPE html>
<html> 
	<head>
		<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<title>Support and Help</title>

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


        <style> 
        .fa {
  			padding: 10px; 
  			font-size: 30px; 
  			width: 50px;
  			text-align: center; 
  			text-decoration: none;
  			margin: 5px 2px;
		}

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
                width: 90%;
                font-size: 20px;
               
            }

            #nav2{
            	padding: 10px;
            	height: 620px;
            }

            #fit{
			width : 100%;
			height: 40%;
 		}

 		#f1{
 			padding: 5px;
 		}




		</style>

	 </head>

	<body>
		<br><br>
        <center><img class="imgtop" src="https://firebasestorage.googleapis.com/v0/b/happyhomes-1234.appspot.com/o/0001-9127767020_20211002_123156_0000.jpg?alt=media&token=7d2df522-280e-491e-a7eb-52dad6e5e0bb" alt="test image" width="1100px" height="200px"></center>
        <br>
		

		<div class="container-fluid">                  		<!-- 1 Open--> 
		 
		

		 <div class="card-header" id="user">
				<h2><center><?php $name = $this->session->userdata("users")['firstname']; ?>
							<?php $lname = $this->session->userdata("users")['lastname']; ?>
				
				Welcome <?php echo $name ?>&nbsp<?php echo $lname ?></center></h2>
		 </div>                          				<!-- 3 Close-->

			<div class="card-body" >
 				<div class="row" id="nav">
  					<div class="col-sm-3">
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
			</nav></div>


			<div class="col-sm-9" id="fit">
				
				<div class="card-header" style="background-color:lightslategray;">
                <h1 style="font-size:25px; height: 20px; font-family:sans-serif; color: white;" ><b><center>Visit Us </center></b></h1>
            	</div>
            	<br>
            	<div class="row">
            		<div class="col-sm-4">
            			<div class="card">
 							 <div class="card-body" style="height:305cpx; border-radius: 10px;">
 							 	<center><img src="https://media.istockphoto.com/vectors/phone-icon-call-application-symbol-flat-interface-logo-simple-shape-vector-id1254036367?k=20&m=1254036367&s=170667a&w=0&h=4Kc9lqCXgDWL8KmyR9wFRbco0pcBB1LoFZ6bSxwrbpE=" height="140px" width="140px"></center>

 							 	
 							 	<center><p style="font-size:20px">For Site Visit</p>
 							 	<p>Call For Appointment</p>
 							 	<p>+919820211111</p></center>
 							 </div>
						</div>
            		</div>
            		<div class="col-sm-8">
            	<form>
            		<table>
            		<tr>
            		<td><input type="text" name="Name" placeholder="Name" style="width:400px; height:50px;"></td>
            		</tr>
            		<tr>
            		<td><input type="email" name="Email" placeholder="Email" style="width:400px; height:50px"></td>
            		</tr>
            		<tr>
            		<td><textarea type="text" name="Message" placeholder="Message" style="width:400px; height:200px ;"></textarea></td>
            		</tr>
            			
            	    </table>
            	    <button style="font-size:20px; width: 400px; background-color: lightslategrey; border-radius: 5px;">Send</button>
            	</form>
            	</div>
            	</div>
				<br>
				<div class="row">
					<div class="col-sm-4" id="f1" style="background-color: rgba(13, 12, 13, 0.11);">
            		
            		<center><i class="fa fa-map-marker"></i></center>
            		<center><b><h2 style="font-size: 18px; ">Address</h2></b></center>
                     <center><p style="font-size: 12px;">Plot No. 278, Ganga Heritage,
						Level 2, Deodhar Marg,
						Noida, 201010</p></center>
                	</div>
          
                	
                
				<div class="col-sm-4" id="f1" style="background-color: rgba(13, 12, 13, 0.32);">
            	
            		<center><i class="fa fa-phone" ></i></center>
            		<center><b><h2 style="font-size: 18px; ">Phone</h2></b></center>
                     <center><p style="font-size: 12px;"> 022 2910 5768</p></center>
                   
                </div>
                <div class="col-sm-4" id="f1" style="background-color:rgba(13, 12, 13, 0.11);">
            		
            		<center><i class="fa fa-envelope"></i></center>
            		<center><b><h2 style="font-size: 18px;">Email</h2></b></center>
                     <center><p style="font-size: 12px;"><a href="#">help@happyhomeprojects.com</a></p></center>
                     
                </div>

                
				</div>
			  
			</div>
		</div>
	</div>
</div>
			<br>
			
			</div>									<!-- 1 Close-->
			
	</body>
</html>