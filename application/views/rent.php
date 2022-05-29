<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Rent</title>
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

        
        #alter{
            width : 100%;
            height: 30%;
        }

        #box:hover{
           box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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


		</style>

</head>
<body>
    <br><br>
        <center><img class="imgtop" src="https://firebasestorage.googleapis.com/v0/b/happyhomes-1234.appspot.com/o/0001-9127767020_20211002_123156_0000.jpg?alt=media&token=7d2df522-280e-491e-a7eb-52dad6e5e0bb" alt="test image" width="1100px" height="200px"></center>



    <div class="container-fluid">
	
       
        <div class="card-body">              <!-- 4 Open-->
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

	<center><div class="container" id="alter">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body" id="box">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0">
                      <div class="card" style="width: 17rem; padding: 10px; background-color: #CCE1F2;">
                           <center><iframe width="250" height="150" src="https://www.youtube.com/embed/mb8s4Hsqzyw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>

                          <div class="card-body">
                            <center><h5 class="card-title">Overview</h5></center>
                            
                          </div>
                        </div>
                 </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true" style="font-size: 20px">GREAT VALUE SHARANAM</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">FEATURED </span></a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">FURNISHED</span></a></li>
                             
                        </ul>
                        <p class="mb-3" style="font-size: 15px">An excellent 2 bhk residential apartment for rent in sector-135 noida, noida. It is a very good property and has 1 balcony(s) which make the apartment more spacious. In addition, it has study room and is . We are looking for rs. 1800.00. It is on the 4th floor . Open parking.1 covered parking.

                            <br><br> <hr>
                            &nbsp &nbsp<i class="fa fa-bed" style="font-size: 15px"> 2 Bedrooms   |   </i> &nbsp
                            <i class="fa fa-bath" style="font-size: 15px"> 2 Bathrooms   |   </i> &nbsp
                            <i class="fa fa-home" style="font-size: 15px"> 1 Balcony with Others </i>
                        </p>
                        
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px"><u>Rent</u></h3>
                        <br>
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px">₹ 35,000/month</h3>
                        <br>

                        
                        
                        <li><i class="fa fa-map-marker" style="font-size: 15px"> Sector-135,Noida </i></li>
                        <br>
                        <div style="font-size: 15px"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                         <br>
                        <center><p style="font-size: 15px">Contact Us : <a href="tel: xxxxxx " class="fa fa-phone"></a></p></center>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3" id="box">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> 
                        <div class="card" style="width: 17rem; padding: 10px; background-color: #CCE1F2;">
                           <center><iframe width="250" height="150" src="https://www.youtube.com/embed/67FuGWBHMAg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>

                          <div class="card-body">
                            <center><h5 class="card-title">Overview</h5></center>
                            
                          </div>
                        </div> 
                    </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true" style="font-size: 20px">URBTECH XAVI</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">FEATURED </span></a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">FURNISHED </span></a></li>
                            
                        </ul>
                        <p class="mb-3" style="font-size: 15px">The apartment has 3 bedrooms 3 bathrooms, servant quarter, drawing-Dining, modular kitchen, and 2 balconies. This is a semi furnished flat with lights, fans, wardrobes in bedrooms, chimney, curtains etc. 
                            <br><br> <hr>
                            &nbsp &nbsp<i class="fa fa-bed" style="font-size: 15px"> 3 Bedrooms   |   </i> &nbsp
                            <i class="fa fa-bath" style="font-size: 15px"> 3 Bathrooms   |   </i> &nbsp
                            <i class="fa fa-home" style="font-size: 15px"> 3 Balcony with Others </i>
                        </p>
                        
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px"><u>Rent</u></h3>
                        <br>
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px">₹ 40,000/month</h3>
                        <br>

                        
                        
                        
                        <li style="font-size: 15px"><i class="fa fa-map-marker"> Sector-168,  Noida</i></li>
                        <br>
                        <div style="font-size: 15px"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <br>
                        <center><p style="font-size: 15px">Contact Us : <a href="tel: xxxxxx " class="fa fa-phone"></a></p></center>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3" id="box">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> 
                          <div class="card" style="width: 17rem; padding: 10px; background-color: #CCE1F2;">
                           <center><iframe width="250" height="150" src="https://www.youtube.com/embed/vZb51XD8VoQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></iframe></center>

                          <div class="card-body">
                            <center><h5 class="card-title">Overview</h5></center>
                            
                          </div>
                        </div> 
                    </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true" style="font-size: 20px">JAYPEE GREENS KOSMOS</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                           
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">SEMI-FURNISHED</span> </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">IMMEDIATE</span></a></li>
                            
                        </ul>
                        <p class="mb-3" style="font-size: 15px">All facelity available as like nearby metro station parking garden etc ,Piped gas facility is available in the property.
                      The apartment has borings water supply.
                      Daily needs shopping could be done within the society premises to make the stay convinent.
                      Full power backup is avail... 
                  <br><br> <hr>
                            &nbsp &nbsp<i class="fa fa-bed" style="font-size: 15px"> 4 Bedrooms   |   </i> &nbsp
                            <i class="fa fa-bath" style="font-size: 15px"> 4 Bathrooms   |   </i> &nbsp
                            <i class="fa fa-home" style="font-size: 15px"> 4 Balcony with Others </i>
                        </p>

                        
                    </div>
                     <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px"><u>Rent</u></h3>
                        <br>
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px">₹ 80,000/month</h3>
                        <br>

                        
                        
                        
                        <li style="font-size: 15px"><i class="fa fa-map-marker"> Sector-118,  Noida</i></li>
                        <br>
                        <div style="font-size: 15px"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <br>
                        <center><p style="font-size: 15px">Contact Us : <a href="tel: xxxxxx " class="fa fa-phone"></a></p></center>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3" id="box">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> 
                         <div class="card" style="width: 17rem; padding: 10px; background-color: #CCE1F2;">
                           <center><iframe width="250" height="150" src="https://www.youtube.com/embed/AdxEPjY73KE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>

                          <div class="card-body">
                            <center><h5 class="card-title">Overview</h5></center>
                            
                          </div>
                        </div>
                    </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true" style="font-size: 20px">PARAS TEIERA</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">FURNISHED</span></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">READY TO MOVE IN </span></a></li>
                           
                        </ul>
                        <p class="mb-3" style="font-size: 15px">3 bhk apartment available in ,sector-137 noida, noida.Located in a serene place, it has a super built-Up area of 1331 sq.Ft. It is an attractive and a newly constructed property. The property has an amazing location and is semi-Furnished.It has 3 balcony(s) which offer an excell...
                         <br><br> <hr>
                            &nbsp &nbsp<i class="fa fa-bed" style="font-size: 15px"> 3 Bedrooms   |   </i> &nbsp
                            <i class="fa fa-bath" style="font-size: 15px"> 3 Bathrooms   |   </i> &nbsp
                            <i class="fa fa-home" style="font-size: 15px"> 3 Balcony with Others </i>
                        </p>
                       
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                       <h3 class="mb-0 font-weight-semibold" style="font-size: 20px"><u>Rent</u></h3>
                        <br>
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px">₹ 65,000/month</h3>
                        <br>

                        
                        
                        
                        <li style="font-size: 15px"><i class="fa fa-map-marker"> Sector-137,  Noida</i></li>
                        <br>
                        <div style="font-size: 15px"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <br>
                        <center><p style="font-size: 15px">Contact Us : <a href="tel: xxxxxx " class="fa fa-phone"></a></p></center>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3" id="box">
                <div class="media align-items-center align-items-lg-s tart text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> 
                         <div class="card" style="width: 17rem; padding: 10px; background-color: #CCE1F2;">
                           <center><iframe width="250" height="150" src="https://www.youtube.com/embed/3OrTsX5O58c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>

                          <div class="card-body">
                            <center><h5 class="card-title">Overview</h5></center>
                            
                          </div>
                        </div>
                         </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true" style="font-size: 20px">AMRAPALI ZODIAC</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">NEW LAUNCH</span> </a></li>
                            
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">FURNISHED</span></a></li>
                            
                            
                        </ul>
                        <p class="mb-3" style="font-size: 15px">Residential apartment for rent.Located in sector-120 noida.It is a semifurnished property.The property has 2 bedrooms with 2 bathrooms .Available at an expected price of rs 35000.Located on 8th floor out of the 18 the property comes with a good construction quality which ages 1-5 years old property,...  
                        <br><br> <hr>
                            &nbsp &nbsp<i class="fa fa-bed" style="font-size: 15px"> 2 Bedrooms   |   </i> &nbsp
                            <i class="fa fa-bath" style="font-size: 15px"> 2 Bathrooms   |   </i> &nbsp
                            <i class="fa fa-home" style="font-size: 15px"> 2 Balcony with Others </i></p>
                        
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                       <h3 class="mb-0 font-weight-semibold" style="font-size: 20px"><u>Rent</u></h3>
                        <br>
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px">₹ 35,000/month</h3>
                        <br>

                        
                        
                        
                        <li style="font-size: 15px"><i class="fa fa-map-marker"> Sector-120,  Noida</i></li>
                        <br>
                        <div style="font-size: 15px"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <br>
                        <center><p style="font-size: 15px">Contact Us : <a href="tel: xxxxxx " class="fa fa-phone"></a></p></center>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3" id="box">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> 
                         <div class="card" style="width: 17rem; padding: 10px; background-color: #CCE1F2;">
                           <center><iframe width="250" height="150" src="https://www.youtube.com/embed/Of8exFjrl9s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>

                          <div class="card-body">
                            <center><h5 class="card-title">Overview</h5></center>
                            
                          </div>
                        </div> 
                    </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true" style="font-size: 20px">GARDENIA GATEWAY</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">NEW LAUNCH</span> </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">FURNISHED </span></a></li>
                            
                        </ul>
                        <p class="mb-3" style="font-size: 15px">I want to rent out a 3 bhk apartment available in ,sector-75 noida, noida.Located in a fully secured gated society, it has a super built-Up area.4 It is an attractive and a newly constructed property. The property has an amazing location and is semi-Furnished.It has 2 balcony(s) which o.../p>
                        <br><br> <hr>
                            &nbsp &nbsp<i class="fa fa-bed" style="font-size: 15px"> 2 Bedrooms   |   </i> &nbsp
                            <i class="fa fa-bath" style="font-size: 15px"> 2 Bathrooms   |   </i> &nbsp
                            <i class="fa fa-home" style="font-size: 15px"> 2 Balcony with Others </i></p>

                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">


                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px"><u>Rent</u></h3>
                        <br>
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px">₹ 75,000/month</h3>
                        <br>

                        
                        
                        
                        <li style="font-size: 15px"><i class="fa fa-map-marker"> Sector-120,  Noida</i></li>
                        <br>
                        <div style="font-size: 15px"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <br>
                        <center><p style="font-size: 15px">Contact Us : <a href="tel: xxxxxx " class="fa fa-phone"></a></p></center>
                         
                    </div>
                </div>
            </div>
        </div>
    </div></center>
</div>
</div>

</body>
</html>