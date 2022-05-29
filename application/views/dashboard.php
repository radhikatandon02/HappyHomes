<!DOCTYPE html> 
<html>  
	<head>
		<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<title>Home</title>  


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
		
		 

		li{
			list-style-type: none;
		}

		li a:hover{
		background: lightslategrey; /*to hover over the menu bar*/
		color: black;
		border-radius: 15px;
		}


		#grad1 {
		  height: 100px;
		  width: 50%;
		  
		}

		#grad2 {
		  height: 60px;
		  background-color: red; /* For browsers that do not support gradients */
		  background-image: linear-gradient(black, black);

		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

		}

		.container-fluid{
			width : 90%;
		}

		#fit{
			width : 100%;
			height: 40%;
			border-radius: 10px;
 		    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		#fit2{
			width : 100%;
			height: 8%;
			background-color: black;
		}

		#carouselExampleControls{
			width: 400px;
		}
		.carousel-inner{
			width: 700px;
		}

		.imgtop{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		.d-block{
			/*border-radius: 50px;*/
			width: 400px;
			height: 200px;
			margin: 0px 30px 20px 0px ;
			padding: 0px;
			/*border: 4px solid white;*/
		}

		#BOX{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		#nav{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}
		#f1{
			border-radius: 10px;
		}
		#f1:hover{

			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		
		</style>

	 </head>

	<body>
		<br><br>
		<center><img class="imgtop" src="https://firebasestorage.googleapis.com/v0/b/happyhomes-1234.appspot.com/o/0001-9127767020_20211002_123156_0000.jpg?alt=media&token=7d2df522-280e-491e-a7eb-52dad6e5e0bb" alt="test image" width="1100px" height="200px"></center>

		
		<div class="container-fluid">                  <!-- 1 Open-->
			
				                           
			<div class="card-body">				 <!-- 4 Open-->
			<nav class="navbar navbar-expand-lg navbar-light bg-dark" id="nav">
			 <a class="navbar-brand active" href="#" style="color: white; font-size: 20px;justify-content: 'center';align-items: 'center';padding:'10px,10px,10px,10px';"> <img src="https://www.vhv.rs/dpng/d/408-4085796_home-icon-gray-png-clipart-png-download-transparent.png" height="40px" width="40px"> &nbsp</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: 'center';align-items: 'center';">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">

			        <a class="nav-link" href="<?php echo base_url()."Login/index"; ?>" style="color: white; font-size: 15px;align-items: 'center';">Home &nbsp<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item ">
			        <a class="nav-link" href="<?php echo base_url()."Login/about"; ?>" style="color: white; font-size: 15px;">About Us &nbsp</a>
			      </li>
			      <li class="nav-item  dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 15px;">
			          Choose
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="min-width: 10rem">
			          <a class="dropdown-item" href="<?php echo base_url()."Login/bsr";?>" style= "font-size: 15px;">Buy </a>
			          
			          <a class="dropdown-item" href="<?php echo base_url()."Login/bsr3"; ?>" style= "font-size: 15px;">Rent </a>
			      </div>
			      </li>

			      <li class="nav-item ">
			        <a class="nav-link" href="<?php echo base_url()."Login/review" ;?>"  style="color: white; font-size: 15px;">&nbsp Reviews &nbsp</a>
			      </li>
			      
			    </ul>
			    
			    <li class="nav-item ">
			        <a class="nav-link bg-dark" href="<?php echo base_url()."Login/dash" ;?>" style="color: white; font-size: 15px;">Login/Sign Up<span class="sr-only">(current)</span></a>
			     </li>

			  </div>
			</nav>
             

         
             
             <br><br>
             <h1 style="font-family: sans-serif; color: crimson; font-size: 40px;"><b><center>"AN ACRE OF PERFORMANCE IS WORTH THE WHOLE WORLD OF PROMISE."</center></b></h1>

             <br>
             <br> 
				<center><span style="font-size: 20px; font-family: sans-serif;"><p>This embodies the philosophy of our group that believes in performance over promise. Well-kept promises blossom into glorious client-company relationships. Acre by acre we aim to build spaces that are built with a prowess, responsibility and moxie.</p></span></center>
				
				<center><span style="font-size: 20px; font-family: sans-serif; "><p>With Happy Homes, we transformed face of the real estate industry in Greater Noida,India by bringing professionalism in this sector. With strong perceptive and instinctive business, we understood that buyers as well as builders were craving for a reliant professional channel to connect and conduct business.</p></span></center>
				 <center><span style="font-size: 20px; font-family: sans-serif; "><p>Every project of Happy Home Group bears a different thought process and more focused idea of creating a robust infrastructure that contains radical design and sensible amenities.
				 </p></span></center>
				 <br>
              <hr>
			<br>


			<div class="container-fluid" id="fit">
            	<div class="row">
            	<div class="col-sm-4 bg-light" id="f1">
            		<br><br>
            		<center><i class="fa fa-thumbs-up"></i></center>
            		<center><b><h2 style="font-size: 22px;">4000</h2></b></center>
                     <center><b><p style="font-size: 21px;">HAPPY CUSTOMERS</p></b></center>
                     <br><br>
                </div>
                <div class="col-sm-4 bg-light" id="f1">
                	<br><br>
            		<center><i class="fa fa-wrench"></i></center>
            		<center><b><h2 style="font-size: 22px;">1000</h2></b></center>
                     <center><b><p style="font-size: 21px;">UNDER CONSTRUCTION UNITS</p></b></center>
                     <br><br>
                </div>
                <div class="col-sm-4 bg-light" id="f1">
                	<br><br>
            		<center><i class="fa fa-briefcase"></i></center>
            		<center><b><h2 style="font-size: 22px;">250</h2></b></center>
                     <center><b><p style="font-size: 21px;">COMMERCIAL SPACES</p></b></center>
                     <br><br>
                </div>
            </div>
            </div>

            <br>
            <hr>
            <br>
           
           <br>

			<div class="container" id="BOX">
           <div class="row" style="background-color: floralwhite;">
               <div class="col-md-6" style="padding: 10px" >

               <center><div id="grad1">
            	<br>
            	<h1 style="font-family: sans-serif; font-size: 30px;"><B>P R O J E C T S</B></h1></center>


                <center><div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  
            <div class="carousel-inner m-auto " style="width :400px">
                <div class="carousel-item active">
                <img src="https://dynamicconsultantsgroup.com/blogs/wp-content/uploads/2020/09/PropertyManagementImage3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="https://media.istockphoto.com/photos/europe-modern-complex-of-residential-buildings-picture-id1165384568?k=20&m=1165384568&s=612x612&w=0&h=CAnAr3uJtmkr0IQ2EPgm0IBoo8oCm-FEYEtyor8X_9I=" class="d-block w-100" alt="...">
            </div>
                <div class="carousel-item">
                 <img src="https://www.ajg.com/us/-/media/images/gallagher/us/insurance/property/property-hero-2.jpg?h=764&w=2000&hash=3F04D6223A696634E54A8253DA87F798" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                 <img src="https://www.aveliving.com/AVE/media/Property_Images/Florham%20Park/hero/flor-apt-living-(2)-hero.jpg?ext=.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                 <img src="https://i.pinimg.com/564x/f8/e7/2f/f8e72fee93928ae3905e8b1a486ecb8f.jpg" class="d-block w-100" alt="...">
                </div>
               
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
            </div></center>


        </div>  

        <div class="col-md-6" id="video" style="padding:10px">
        	<center><div id="grad1">
            	<br>
            	<h1 style="font-family: sans-serif; font-size: 30px; "><b>I N S I G H T S</b></h1></center>
            	
			<center><span><iframe width="400" height="200" src="https://www.youtube.com/embed/JcO2eveWPjM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span></center>
         </div>
	</div>
</div>
		<br><hr><br><br>
		<div id="grad2">
            	
            	<center><h1 style="font-family: sans-serif; font-size: 30px; padding: 10px; color: white;"><b>A S S O C I A T E S</b></h1></center>
        </div>

		<div class="card-body">
		
			<div class="row">
			  <div class="col" id="image" style="background-color: white;"><center><img src="https://happyhomeprojects.com/wp-content/uploads/2019/06/happyhomes_page-0023-160x90.jpg" width="150px" height="100px"></center></div>

			  <div class="col" id="image" style="background-color: white;"><center><img src="https://happyhomeprojects.com/wp-content/uploads/2017/07/logo2-160x90.png" width="150px" height="100px"></center></div>

			  <div class="col" id="image" style="background-color: white;"><center><img src="https://happyhomeprojects.com/wp-content/uploads/2017/07/logo1-1-160x90.png" width="150px" height="100px"></center></div>

			  <div class="col" id="image" style="background-color: white;"><center><img src="https://happyhomeprojects.com/wp-content/uploads/2019/06/happyhomes_page-0022-160x90.jpg" width="150px" height="100px"></center></div>

			  <div class="col" id="image" style="background-color: white;"><center><img src="https://happyhomeprojects.com/wp-content/uploads/2019/06/happyhomes_page-0024-160x90.jpg" width="150px" height="100px"></center></div>

			  </div>
			  <br>
			<div class="row">
			  <div class="col" id="image" style="background-color: white;"><center><img src="https://happyhomeprojects.com/wp-content/uploads/2017/07/p-160x90.jpg" width="150px" height="100px"></center></div>

			 <div class="col" id="image" style="background-color: white;"><center><img src="https://happyhomeprojects.com/wp-content/uploads/2017/07/nad-160x90.png" width="150px" height="100px"></center></div>


			  <div class="col" id="image" style="background-color: white;"><center><img src="https://happyhomeprojects.com/wp-content/uploads/2017/07/JW-160x90.png" width="150px" height="100px"></center></div>

			  <div class="col" id="image" style="background-color: white;"><center><img src="https://happyhomeprojects.com/wp-content/uploads/2017/07/law-160x90.png" width="150px" height="100px"></center></div>

			  <div class="col" style="background-color: white;"><center><img src="https://happyhomeprojects.com/wp-content/uploads/2017/07/talns-160x90.png" width="150px" height="100px"></center></div> 
			</div>
			<br>
			<div class="row">
			  <div class="col-sm-4" id="image" style="background-color: white;"><center><img src="https://www.ultratechcement.com/content/dam/ultratechcementwebsite/solutions/3d-corporate-logo-full.jpg" width="150px" height="100px"></center></div>

			  <div class="col-sm-4" id="image" style="background-color: white;"><center><img src="https://happyhomeprojects.com/wp-content/uploads/2017/07/logo3-160x90.png" width="150px" height="100px"></center></div>

			  <div class="col-sm-4" id="image" style="background-color: white;"><center><img src="https://happyhomeprojects.com/wp-content/uploads/2017/07/int-160x90.png" width="150px" height="100px"></center></div>
			  

			</div>
		
		</div>
		</div>
		</div>                             
				
			
			
    
		

				
			
				
			</div>									<!-- 1 Close-->
			<div class="container-fluid" id="fit2">
            	<div class="row">
            	<div class="col-md-4">
            		<br><br>
            		<center><b><p style="font-size: 15px; color: white;">MAIL US :</p></b></center>
            		<center><a class="fa fa-envelope" href="mailto: promotions.utkarshghildyal01@gmail.com"></a></center>
            		<br><br>
               </div>
                <div class="col-md-4">
                	<br><br>
            		<center><p><b style="font-size: 15px; color: white;">FOLLOW US : </b></p>
				
				
				<a href="https://www.facebook.com/" class="fa fa-facebook">&nbsp</a>

				<a href="https://twitter.com/?lang=en" class="fa fa-twitter">&nbsp</a>
				
				<a href="https://in.linkedin.com/" class="fa fa-linkedin">&nbsp</a>
				
				<a href="https://www.instagram.com/" class="fa fa-instagram">&nbsp</a></center>
				<br><br>
			</div>
                <div class="col-md-4">
                	<br><br>
            		<center><b><p style="font-size: 15px; color:white;">CONTACT US :</p></b></center>
            		<center><a href="tel: xxxxxx " class="fa fa-phone"></a></center>
            		<br><br>
                </div>
            </div>
            </div>
        </div>

	</body>
</html>