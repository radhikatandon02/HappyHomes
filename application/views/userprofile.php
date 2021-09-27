 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<title>USER PROFILE</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style> 
        .fa {
  			padding: 20px;
  			font-size: 30px;
  			width: 50px;
  			text-align: center;
  			text-decoration: none;
  			margin: 5px 2px;
		}
		ul{
		list-style-type: none; /*to remove bullets*/
		margin: 0;
		padding: 0;
		background : black;
	    width: 200px;
		
		}
		li a{
			display: block;
			text-decoration: none;   /*to display menu bar in a block way and apply colour and modify the top and bottem using padding*/
			color: red;
			padding: 12px 18px;
		}
		li a:hover{
		background: steelblue; /*to hover over the menu bar*/
		color: aliceblue;
		}
		body{
			background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTDZRPD2xowPGq8KmAyb_5WO088Dj8OpEm7Yg&usqp=CAU") ;
			background-repeat: no-repeat;
			object-fit: fill;
			background-size: cover;
		background-attachment: fixed;
		}


		</style>

	 </head>

	<body>

		<center><img src= "https://i.pinimg.com/474x/3d/88/8f/3d888ffcdf8eb1930e11c99f64cc5e52--real-estate-logo-real-estates.jpg" height="300px" width="500px"></center>
        <center><b><h1><i>happyhomes.com</i></h1></b></center>

		<div class="container">                  <!-- 1 Open-->
			<div class="card my-5 p-4">			 <!-- 2 Open-->	
				<div class="card-header">		 <!-- 3 Open-->
			<h2><center><?php $name = $this->session->userdata("user")['name']; ?>
				
				Welcome <?php echo $name ?>
				
			</center></h2>
			    </div>                           <!-- 3 Close-->

			<div class="card-body">				 <!-- 4 Open-->
                <ul>
					<li><a target="_blank" href="first.html">Home</a></li>
					<li><a href="#">About us</a></li>
					
					
				<div class="dropdown">            <!-- 5 Open-->        
                    <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Choose
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                    <li><a href="#">Buy</a></li>
                    <li><a href="#">Sell</a></li>
                    <li><a href="#">Rent</a></li>
               		</ul>
           		</div>							 <!-- 5 Close-->
           		<li><a href="#">Offers For You</a></li>
           		<li><a href="#">Customer Testimonials</a></li>
    				
				</ul>

			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

			</div>									<!-- 2 Close-->
				
			</div>									<!-- 1 Close-->

	</body>
</html>