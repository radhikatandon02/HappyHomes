 <!DOCTYPE html>
<html> 
<head> 
	<meta charset="utf-8">
	<title>About Us</title>
 
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>


		<style type="text/css">

			li{
			list-style-type: none;
			}
			li a:hover{
		background: lightslategrey; /*to hover over the menu bar*/
		color: black;
		border-radius: 15px;
		}

			.h1{
				font-family: fantasy;
			}

			/*body{
			background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDZRPD2xowPGq8KmAyb_5WO088Dj8OpEm7Yg&usqp=CAU") ;
			background-repeat: no-repeat;
			object-fit: fill;
			background-size: cover;
		background-attachment: fixed;
		} */
		.container-fluid{
			width : 90%;
		}

		.imgtop{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		#nav{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		.card-header{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		#body{
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		#side{
			background-color: lightgray;
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
			 <a class="navbar-brand active" href="#" style="color: white; font-size: 20px;justify-content: 'center';align-items: 'center';padding:'10px,10px,10px,10px';"><img src="https://www.vhv.rs/dpng/d/408-4085796_home-icon-gray-png-clipart-png-download-transparent.png" height="40px" width="40px"> &nbsp</a>
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
			          
			          <a class="dropdown-item" href="<?php echo base_url()."Login/bsr3"; ?>" style= "font-size: 15px;">Rent</a>
			      </div>
			      </li>

			      <li class="nav-item ">
			        <a class="nav-link" href="<?php echo base_url()."Login/review" ;?>"  style="color: white; font-size: 15px;">&nbsp Reviews &nbsp</a>
			      </li>
			      
			    </ul>

			  </div>
			</nav>

<br>
 	<div class="card-header">
 		
 		
 	<h1 style="font-size:25px"><b><center>About Happy Homes</center></b></h1>
 	</div>
 	<div class="card-body" >
 		<div class="row" id="body">

 	<div class="col-9" style="background-color: white;">
	<span style="font-size: 18px; font-family:sans-serif;"><p>Happy homes is a real estate consulting firm providing best option for real estate investors , End user residential, retail, commercial buyers and Corporate office Lease support in various locations. We are committed and ensured in delivering best since 2006 in line with our motto “a tradition of trust” that has been built up over these years with strong professional co workers and employees who brought us to a point to be one of the best in the real estate market. Over these years company has earned a reputation that has a unique combination of quality, value, trust & reliability</p>

	<p>With Happy Homes, we practically transformed the face of the real estate industry in India by bringing professionalism in this sector. Strongly perceptive and instinctive in business, We understood that the buyers as well as builders were craving for a reliant professional channel to connect and conduct business.</p>

	<p>There was a major gap between the two when it came to real estate service providers. Buyers wanted someone whose guidance they could trust and builders wanted someone to sell and market their projects so that they could focus on building projects. Property brokers were the only option for buyers at the time, but definitely not the best.</p>

	<p>We realized the dire need of reliant real estate professionals and not just mere brokers to bridge that space between buyers and sellers. These professionals were to address the queries and apprehensions of buyers, serve them with a property catalogue, guide them through the available options, offer them the best price and deals on behalf of accredited builders, and facilitate the process of buying and acquiring property while safeguarding buyers’ interests.</p>

	<p><b>Our Tagline:</b> A Tradition of Trust…</p>

	<p><b>Our Values:</b> Honesty, Trust, Ethics, Transparency and respect for each individual associated with us in any capacity.</p>

	<p><b>Our Mission:</b> To achieve our goals and objectives in a transparent and ethical environment of trust and honesty towards our clients, customers, employees, associates and society at large.<p>

	<p><b>Our Vision:</b> To be a globally recognized and respectable organization well known for our ethical standards.</p></span>

	</div>
<div class="col-3"  id="side">
	<center><h4 style="font-size:22px; padding: 10px;"><b>Our Projects</b></h4></center>
	
			<strong style="font-size:18px; ">Bhutani Group</strong>
			<ul>
				
					<li style="font-size: 16px; font-family:open sans;"><b>Alphathum</b></li>
				
					<li style="font-size:16px; font-family:open sans;"><b>Cyberthum</b></li>
					
					<li style="font-size: 16px; font-family:open sans;"><b>Grandthum</b></li>
					
			</ul>
			<br>
			<strong style="font-size:18px; ">ATS Group</strong>
			<ul>
				
					<li style="font-size: 16px; font-family:open sans;"><b>ATS Le Grandiose</b></li>
					
					<li style="font-size: 16px; font-family:open sans;"><b>ATS Pious Hideaways</b></li>
					
					<li style="font-size: 16px; font-family:open sans;"><b>ATS Picturesque Reprieves</b></li>
			</ul>
			<br>
			<strong style="font-size:18px; ">Godrej Properties</strong>
			<ul>
				
					<li style="font-size: 16px; font-family:open sans;"><b>Godrej Golf Links</b></li>
					
					<li style="font-size: 16px; font-family:open sans;"><b>Godrej Palm Retreat</b></li>
					
					<li style="font-size: 16px; font-family:open sans;"><b>Godrej Nurture</b></li>
					
					<li style="font-size: 16px; font-family:open sans;"><b>Godrej South Estate</b></li>
			</ul>
			<br>
			<strong style="font-size:18px; ">ACE Group</strong>
			<ul>
				
					<li style="font-size: 16px; font-family:open sans;"><b>Ace Parkway</b></li>
					
					<li style="font-size: 16px; font-family:open sans;"><b>Ace Golfshire</b></li>
					
			</ul>
			<br>
			<strong style="font-size:18px; ">Samridhi</strong>
			<ul>
				
					<li style="font-size: 16px; font-family:open sans;"><b>Samridhi Luxuriya Avenue</b></li>
					
			</ul>
			<br>
			<strong style="font-size:18px; ">Great value Anandam Canary TATA Group</strong>
			<ul>
				
					<li style="font-size: 16px; font-family:open sans;"><b>TATA Eureka Park</b></li>
					
			</ul>

</div>
</div>
</div>
	
</div>
</body>
</html>