<!DOCTYPE html>
<html> 
	<head>
		<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<title>Terms and Conditions</title>

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

		#f1:hover{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}


		#points{
		list-style-type: decimal; /*to remove bullets*/ 
		 
	    width: 200px;
		
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
		 </div>                           				<!-- 3 Close-->

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


				<div class="col-sm-9">
					<div class="card-header" style="background-color: lightslategray;">
						<h1 style="font-size:25px; height: 20px; font-family:sans-serif; color: white;" ><b><center>Terms & Conditions</center></b></h1>
					</div>
					<br>
					<p>1. Happy Homes Realtors and builders. provides end-to-end property solutions for every need. Here the term “Client” refers to a person, irrespective of Gender, Firm, Company, Entity in whose name favour a particular property is booked and/or a credit note is issued.</p>
					<p>2. The Company as a service provider relies on the information pertaining to various projects provided by the respective builders/developers, given in writing and/or provided through their representatives, responsible persons, advertisements by the Builders/Developers in the print and/or electronic media and/or such other authentic sources.</p>

					<h5>User’s Consent</h5>
					<p>By using the Website and/ or by providing information to the Company through the Website, the User consents to the collection and use of the information disclosed by the User on the Website in accordance with this Policy, including but not limited to the User’s consent the Company/Website sharing/divulging the User’s information, as per Privacy Policy.</p>

					<h5>Disclaimer*</h5>
					<p>For all the real estate projects displayed on our website the information has been gathered by Happy Homes Realtors and Builders “the Company” through public sources/project marketing material/internet sources/on their own and has not been provided by the developer and hence shall not be construed as an offer for sale or an advertisement for sale by Happy Homes or by the builder/developer. Additionally-</p>

					

					<p>1. While reasonable efforts are made by the Company to ensure the update, authenticity and completeness of the information displayed here, there exists a possibility that it may not be complete and updated. The Clients are advised to recheck all information and details form the Builder/ Developer and make an independent assessment/decision before booking and property. The Client shall not make any claim on the Company, whatsoever in this regard.</p>

					<p>2. The pictures / photos shown in various projects include the artist’s impression of the Project. The actual properties may vary from such representations. You may also verify the completeness and accuracy of the information from RERA website of the respective state where the Project is located.</p>


					<p>Happy Homes shall neither be responsible nor liable for any inaccuracy in the information provided here and therefore the customers are requested to validate the information from the respective builders/developers before making any decision of the purchase of properties. Happy Homes, its directors, employees, agents and other representatives shall not be liable for any action taken, cost / expenses / losses incurred by you based on the information given on its portal.</p>
					

				</div>
		

				
			   	<?php #foreach($users as $key): ?>
			   	<!--<tr>
			   		<td><?php #echo $key['emp_id']; ?></td>
			   		<td><?php #echo $key['name']; ?></td>
			   		<td><?php #echo $key['email']; ?></td>
			   		<td><?php #echo $key['create_on']; ?></td>
			   		<td><a href="<?php #echo base_url()."Users/update/".$key['emp_id']; ?>" ></a></td>
			   	</tr> -->
			   <?php #endforeach; ?>
			  
			</div>
		</div>
	</div>
</div>
			<br>
			
			</div>									<!-- 1 Close-->
			
	</body>
</html>