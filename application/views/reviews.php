<!DOCTYPE html>
<html> 
<head>
	<meta charset="utf-8">
	<title>Reviews</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<style>
		li{
			list-style-type: none;
		}
		li a:hover{
		background: lightslategrey; /*to hover over the menu bar*/
		color: black;
		border-radius: 15px;
		}
       .col{
       	border-radius: 20px 30px 10px 40px;
            padding: 10px;
       } 
        
		.container-fluid{ 
			 width : 90%; 
		}

		.imgtop{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		#nav{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		#head{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		#c1{
			background-color: white;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}


	
    </style>
</head>
<body>
	<br><br>
		<center><img class="imgtop" src="https://firebasestorage.googleapis.com/v0/b/happyhomes-1234.appspot.com/o/0001-9127767020_20211002_123156_0000.jpg?alt=media&token=7d2df522-280e-491e-a7eb-52dad6e5e0bb" alt="test image" width="1100px" height="200px"></center>

	<div class="container-fluid">
	
		

			<div class="card-body">				 <!-- 4 Open-->
			<nav class="navbar navbar-expand-lg navbar-light bg-dark" id="nav">
			 <a class="navbar-brand active" href="#" style="color: white; font-size: 20px;justify-content: 'center';align-items: 'center';padding:'10px,10px,10px,10px';"><img src="https://www.vhv.rs/dpng/d/408-4085796_home-icon-gray-png-clipart-png-download-transparent.png" height="40px" width="40px">&nbsp</a>
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

			  </div>
			</nav>

<br>
	
	<div class="card-header" id="head">
		
	<h1 style="font-size:25px; font-family:sans-serif;" ><b><center>WHAT OUR CUSTOMERS SAY </center></b></h1>
	</div>
	<div class="card-body">
  <div class="row">
    <div class="col-md-4" >
    
	<center><span style="font-size: 15px; font-family: serif;"><br><p>“I found the Happy Home Group to be passionate from the word go. Their selection of materials for civil work has always been above industry standards. I am confident that they will maintain their glorious track record of timely completions in redevelopment projects, along with assurance of quality and service.”</p></span></center>
	<center><img src="https://ysm-res.cloudinary.com/image/upload/c_fill,f_auto,q_auto:eco,w_975/v1/yms/prod/e0aa713c-e471-4cca-a9d4-bcfab68da744" height="158px" width="138px"></center><hr><div ><center><b><h6>VANDANA SHIRALKAR</h6></b> <b><h6>(Asst. Project Manager, Toyo Engg.)</h6></b></center></div></div>
	<br>
   
    <div class="col-md-4" style="background-color: lightgray;" id="c1">
	<center><span style="font-size: 15px; font-family: serif;"><br><p>“My wife and I feel privileged to be a part of a well-planned and executed project, Jade Gardens. We will soon be moving to our new abode with this feel-good factor in the value-rich project. We wish you a great future in reaching new heights.”</p></span></center>
	<br><br>
	<center><img src="https://c1.wallpaperflare.com/preview/979/283/752/rishi-gangoly-man-indian-professional-male-thinking.jpg" height="150px" width="150px" ></center><hr><div ><center><b><h6>DILEEP SHRINGARPURE</h6></b> <b><h6>(DIRECTOR ELLICA PB INDIAPVT LTD)</h6></b></center></div></div>
	<br>
    
    <div class="col-md-4" >
    
	<center><span style="font-size: 15px; font-family: serif;"><br><p>“I am a resident of Lucknow, Uttar Pradesh. I congratulate the Happy Home Group on their endeavour that offers value-rich projects to Noida. What truly sets them apart is the thoughtfulness in the form of excellent layouts, cross ventilation and use of the balcony. ”</p></span></center>
	<br>
	<center><img src="https://am.jpmorgan.com/content/dam/jpm-am-aem/global/en/images/bios/Meera-Pandit.jpg" height="150px" width="150px"></center>
	<hr><div class="col"><center><b><h6>MEERA AGARWAL</h6></b>  <b><h6>Gynecologist, Agarwal nursing home</h6></b></center></div></div>
</div>

<br>

    <div class="row">
    <div class="col-md-4" style="background-color: lightgray;" id="c1">
 	<center><span style="font-size: 15px; font-family: serif;"><br><p>“They displayed a professional attitude while the making of this iconic project – Jade Gardens. Before making a booking in the under construction stage, I made some cross-referencing from the industry and received strong recommendations about their capabilities and punctuality. I wish the Happy Home Group luck for a positive future.”</p></span></center>
 	<center><img src="https://www.zs.com/content/dam/images/zs-people/Vaneet_Sethi.jpg" height="150px" width="120px"></center><hr><div><center><b><h6>MR. VANEET GUPTA</h6></b> <b><h6>(VICE PRESIDENT HEAD – FOREX TRADING CITIBANK, BKC)</h6></b></center></div></div>

 	
 	<div class="col-md-4" style="background-color: white;">
 	
	<center><span style="font-size: 15px; font-family: serif;"><br><p>“My mother and our family thank the Happy Home Group from the bottom of our hearts and are grateful for helping us move into our dream home. Their site team has been exemplary in making efforts to help us settle down in our new home.”</p></span></center>
	<br><br>
	<center><img src="https://media.istockphoto.com/photos/senior-couple-at-park-picture-id1213502886?k=20&m=1213502886&s=612x612&w=0&h=Qfn6eM-ehbASaF6BKUswKR3qm-QzXuSRV4ub-MHMRc8=" height="170px" width="220px" ></center><hr><div><center><b><h6>VIJAYA & VILAS W RAJADHYAKSHA</h6></b> <b><h6>(RESIDENT OF JADE GARDENS )</h6></b></center></div></div>
		
	<br>
	<div class="col-md-4" style="background-color: lightgray;" id="c1">
	<center><span style="font-size: 15px; font-family: serif; "><br><p>“I was looking for a high end project in BKC, when I came across Happy Home Group’s Jade Gardens. The developer has a futuristic vision and is committed to high quality standards and sound financial management. Its efforts to build eco-friendly projects, speaks volumes of its integrity and intent.”</p></span></center>
	<BR>
	<center><img src="https://www.itcportal.com/about-itc/leadership/images/supratim-dutta-pop.jpg" height="150px" width="150px"></center><hr><div><center><b><h6>SUPRATIM SARKAR</h6></b> <b><h6>(VP, Capital Markets, SBI)</h6></b></center></div></div>
  </div>
   </div> 

</div>
</div>

</body>
</html>