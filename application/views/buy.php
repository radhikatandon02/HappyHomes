<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Buy </title>
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

        .container-fluid{ 
             width : 90%; 
        }

        #alter{
            width : 100%;
            height: 30%;
        }

        #box:hover{
           box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
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



    <div class="container-fluid" >
	
       
        <div class="card-body">              <!-- 4 Open-->
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
                      
                      <a class="dropdown-item" href="<?php echo base_url()."Login/bsr3  "; ?>" style= "font-size: 15px;">Rent </a>
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
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://images.pexels.com/photos/186077/pexels-photo-186077.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" height="250" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true" style="font-size: 20px">VTP PEGASUS BY VTP REALTY</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">New Launch </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">Furnished </a></li>
                             <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">P52000001298</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">POSSESSION IN 05 2022</a></li>
                        </ul>
                        <p class="mb-3" style="font-size: 15px">VTP Pegasus is a pre-released mission by way of using VTP Realty and carries 1,2 and 3 BHK configuration houses with size beginning from 450 square ft. To 1100 sq.Ft. The project is well designed with fashionable spacing and sufficient air goes with the flow and enough daylight shining through.</p>
                        
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px">₹ 35 Lac(s)</h3>
                        <br>

                        <li style="font-size: 15px">450 - 1100 sq.ft.</li>
                        <li style="font-size: 15px"> 2 BHK & 3 BHK</li>
                        <li><i class="fa fa-map-marker" style="font-size: 15px"> Greater Noida, West</i></li>
                        <div class="text-muted" style="font-size: 15px">4520 reviews</div>
                        <div style="font-size: 15px"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                         <br>
                        <center><p style="font-size: 15px">Contact Us : <a href="tel: xxxxxx " class="fa fa-phone"></a></p></center>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3" id="box">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://is1-3.housingcdn.com/4f2250e8/39b593cf5832f55d9a302bf882f1b25d/v0/fs/mahadev_builders_residential_apartment-mansa_ram_park-delhi-mahadev_builders.jpeg" width="250" height="250" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true" style="font-size: 20px">TATA EUREKA PARK BY TATA REALTY</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">Apartments</a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">Unfurnished </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">Under- Construction </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">UPRERAPRJ5448</a></li>
                        </ul>
                        <p class="mb-3" style="font-size: 15px">TATA Eureka Park Phase 1 is being offered by Tata Value Homes in Sector 150 of Noida. It is a realty project spread over 20 acres out of which 70% is open space. It offers 2 BHK and 3 BHK apartments with carpet area ranging from 648 sq. ft. </p>
                        
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px">₹ 50.6 Lac(s)</h3>
                        <br>

                        
                        
                        <li style="font-size: 15px">648 - 981 sq.ft.</li>
                        <li style="font-size: 15px"> 2 BHK & 3 BHK</li>
                        <li style="font-size: 15px"><i class="fa fa-map-marker"> Sector 150, Noida</i></li>
                        <div class="text-muted" style="font-size: 15px">2349 reviews</div>
                        <div style="font-size: 15px"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <br>
                        <center><p style="font-size: 15px">Contact Us : <a href="tel: xxxxxx " class="fa fa-phone"></a></p></center>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3" id="box">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://media.istockphoto.com/photos/exterior-view-of-modern-apartment-building-offering-luxury-rental-in-picture-id1322575582?b=1&k=20&m=1322575582&s=170667a&w=0&h=bGCtLpgCEorQuVdW2lbWguNZHcOGPePSwDibgbgyh0U=" width="250" height="270" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true" style="font-size: 20px">ATS RHAPSODY BY ATS GROUP</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">Apartments </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">Unfurnished </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">Under- Construction </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">UPRERAPRJ442430</a></li>
                        </ul>
                        <p class="mb-3" style="font-size: 15px">Ats Rhapsody is the best project of this group situated in greater Noida sector 1, Noida Extension. ATS Rhapsody comes up with 1800 square feet and 2400 square feet luxury residential units. The project is possessed with seven multi-story towers. </p>

                        
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px">₹ 77.5 Lac(s)</h3>
                        <br>

                       <li style="font-size: 15px">1800 - 2400 sq ft</li>
                        <li style="font-size: 15px"> 3 BHK & 4 BHK</li>
                        <li style="font-size: 15px"><i class="fa fa-map-marker"> Greater Noida</i></li>
                        <div class="text-muted" style="font-size: 15px">3416 reviews</div>
                        <div style="font-size: 15px"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                         <br>
                        <center><p style="font-size: 15px">Contact Us : <a href="tel: xxxxxx " class="fa fa-phone"></a></p></center>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3" id="box">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://images.pexels.com/photos/439391/pexels-photo-439391.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="260" height="260" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true" style="font-size: 20px">AJNARA LONDON SQUARE BY AJNARA GROUP</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">Apartments </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">Furnished </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">Ready to Move In </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">UPRERAPRJ2990</a></li>
                        </ul>
                        <p class="mb-3" style="font-size: 15px">Ajnara London Square is an elite project developed by one of the Greater Noida well known Developers Ajnara. It is spread across 23 acres of land with just about 189 units up for grab. Main highlights of project: Open terrace in every villa and beautiful garden in the backyard of all villas.</p>
                       
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px">₹ 66.62 Lac(s)</h3>
                        <br>

                        <li style="font-size: 15px">1890 - 6945 sq.ft.</li>
                        <li style="font-size: 15px">4 BHK & 5 BHK</li>
                        <li style="font-size: 15px"><i class="fa fa-map-marker"> Sector 22A,Noida</i></li>
                        <div class="text-muted" style="font-size: 15px">6561 reviews</div>
                        <div style="font-size: 15px"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                         <br>
                        <center><p style="font-size: 15px">Contact Us : <a href="tel: xxxxxx " class="fa fa-phone"></a></p></center>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3" id="box">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://radiantassets.com/wp-content/uploads/2020/05/radiant-appartment.png" width="250" height="250" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true" style="font-size: 20px">GODREJ GREEN COVE BY GODREJ PROPERTIES</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">New Launch </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">Apartments </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">Furnished </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">POSSESSION IN 09 2024 </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">P52100026875</a></li>
                        </ul>
                        <p class="mb-3" style="font-size: 15px">Godrej Green Cove residential project is yet another affordable as well as luxury inhabited sought after addresses in Noida. Godrej Green Cove Mahalunge is nestled in the foothills of Deccan Plateau which is quite lush green with a pleasing view.  </p>
                        
                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px">₹ 42.5 Lac(s)</h3>
                        <br>

                        <li style="font-size: 15px">423 - 815 Sq.ft.</li>
                        <li style="font-size: 15px">1BHK, 2BHK & 3 BHK</li>
                        <li style="font-size: 15px"><i class="fa fa-map-marker"> Sector-4,Greater Noida</i></li>
                        <div class="text-muted" style="font-size: 15px">4269 reviews</div>
                        <div style="font-size: 15px"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                         <br>
                        <center><p style="font-size:15px">Contact Us : <a href="tel: xxxxxx " class="fa fa-phone"></a></p></center>
                    </div>
                </div>
            </div>
            <div class="card card-body mt-3" id="box">
                <div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
                    <div class="mr-2 mb-3 mb-lg-0"> <img src="https://www.sobha.com/wp-content/uploads/2020/09/153873042220181005-1.webp" width="250" height="250" alt=""> </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"> <a href="#" data-abc="true" style="font-size: 20px">ANTARA SENIOR LIVING NOIDA PHASE1 BY MAX GROUP</a> </h6>
                        <ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">New Launch </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">Apartments </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">Unfurnished </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">POSSESSION IN 12 2024 </a></li>
                            <li class="list-inline-item"><a href="#" class="text-muted" data-abc="true" style="font-size: 10px"><span class="border" style="background-color: lightgrey; padding: 2px; ">UPRERAPRJ745377</a></li>
                        </ul>
                        <p class="mb-3" style="font-size: 15px">The 2 and 3 BHK homes in Antara Senior Living in Noida Phase 1 is the luxurious segment housing range planned and designed specifically for home owners looking at houses for Senior citizens. Located in Sector 150, Noida these apartments in Noida Expressway are available from 849 - 1794 sq.ft.</p>
                        

                    </div>
                    <div class="mt-3 mt-lg-0 ml-lg-3 text-center">
                        <h3 class="mb-0 font-weight-semibold" style="font-size: 20px">₹ 1.08 Cr</h3>
                        <br>

                        <li style="font-size: 15px">849 - 1794 sq.ft.</li>
                        <li style="font-size: 15px">2 BHK & 3 BHK</li>
                        <li style="font-size: 15px"><i class="fa fa-map-marker"> Sector-69,Greater Noida</i></li>
                        <div class="text-muted" style="font-size: 15px">3456 reviews</div>
                        <div style="font-size: 15px"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                        <br>
                        <center><p style="font-size: 15px">Contact Us : <a href="tel: xxxxxx " class="fa fa-phone"></a></p></center>
                         
                    </div>
                </div>
            </div>
        </div>
    </div></center>
</div>
<center><ul class="pagination justify-content-center">
    
    <li class="page-item active"><a class="page-link" href="javascript:void(0);" style="font-size:15px">1</a></li>
    <li class="page-item"><a class="page-link" href="<?php echo base_url()."Login/bsr2";?>" style="font-size:15px">2</a></li>
    
  </ul></center>

</div>

</body>
</html>