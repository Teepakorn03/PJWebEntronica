

<html lang="{{ config('app.locale') }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
	<title>ENTRONICA</title>
<!--

Template 2083 Steak House

http://www.tooplate.com/view/2083-steak-house

-->



	<!-- stylesheets css -->
  <link rel="stylesheet" href="../css/bootstrap.min.css"  type="text/css">

  	<link rel="stylesheet" href="../css/magnific-popup.css"  type="text/css">

	<link rel="stylesheet" href="../css/animate.min.css"  type="text/css">
	<link rel="stylesheet" href="../css/font-awesome.min.css"  type="text/css">

  	<link rel="stylesheet" href="../css/nivo-lightbox.css"  type="text/css">
  	<link rel="stylesheet" href="../css/nivo_themes/default/default.css"  type="text/css">

  	<link rel="stylesheet" href="../css/hover-min.css"  type="text/css">
  	<link rel="stylesheet" href="../css/flexslider.css"  type="text/css">

	<link rel="stylesheet" href="../css/style.css"  type="text/css">


</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- Preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-pulse"></div>
</div>


<!-- Home section -->
<section id="home" class="parallax-section">
  <div class="gradient-overlay"></div>
    <div class="container">
      <div class="row">
				<div class="col-md-offset-2 col-md-8 col-sm-12">



				<p class="wow fadeInUp" data-wow-delay="1.0s">IT SOLUTION PROVIDER AND SYSTEM INTEGRATOR COMTANY.</p>
				<a href="#about" class="wow fadeInUp btn btn-default hvr-bounce-to-top smoothScroll" data-wow-delay="1.3s">START NOW</a>
				</div>
      </div>
    </div>
</section>


<!-- Navigation section -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">ENTRONICA</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#top" class="smoothScroll">Home</a></li>
        <li><a href="#about" class="smoothScroll">About</a></li>
        <li><a href="#menu" class="smoothScroll">Prodoct & Service</a></li>
        <li><a href="#team" class="smoothScroll">Partner</a></li>
        <li><a href="#gallery" class="smoothScroll">Activity</a></li>
        <li><a href="#contact" class="smoothScroll">Contact</a></li>
				<li>
          <a href="#">




          </a>
        </li>
      </ul>
    </div>

  </div>
</div>


<!-- Feature section -->


<!-- About section -->
<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
          <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>About</h2>
            <h4>________________</h4>
          </div>
      </div>

      <div class="clearfix"></div>

      <div class="wow fadeInUp col-md-3 col-sm-5" data-wow-delay="0.3s">



        <h3>Entronica Co., Ltd. was founded in January 1998</h3>
      </div>

      <div class="wow fadeInUp col-md-5 col-sm-7" data-wow-delay="0.5s">

        <!-- flexslider -->
        <div class="flexslider">
          <ul class="slides">

            <li>



            </li>
            <li>




            </li>


          </ul>
        </div>

         <p> Entronica  is an IT solution provider and system integrator company based in Thailand.We provide software solution development, implementation, integration, including professional and consultancy service on IT and telecommunication area.</p>
      </div>

       <div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="0.9s">
        	<h3>WHY ENTRONICA?</h3>
         	<p>Realizing that key success for our business is relying on our customers, we have built our business by focusing on the delivery of high quality solutions and services to our customers. The basis for this successful can only be achieved through good collaboration between customers, employees, and management.</p>
         	<p>Apart from that, all deliveries we provided to our customers are surrounded by our customer support which is our fundamental aspect of how we are doing our business.

Regardless of availability of solutions we have or no matter what kind of problems you are facing, we are here to support your needs.</p>


      </div>

		</div>
	</div>
</section>




<section id="team" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>PARTNER</h2>
            <h4>_______________</h4>
        </div>
      </div>

      <div class="clearfix"></div>
@foreach ($partner as $partner)
      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="team-thumb">
              <img src="../img/upload/<?php echo $partner -> image?>" class="img-responsive" alt="Team">>
                <div class="team-des">
                  <h3>PARTNER</h3>
                    <ul class="social-icon">
                      <li><a href="#" class="fa fa-facebook"></a></li>
                      <li><a href="#" class="fa fa-twitter"></a></li>
                      <li><a href="#" class="fa fa-dribbble"></a></li>
                    </ul>
                </div>
          </div>
      </div>
  @endforeach

      <div class="clearfix"></div>

    </div>
  </div>
</section>
<!-- Menu section -->
<section id="menu" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>Prodoct & Service</h2>
            <h4>________________</h4>
        </div>
      </div>

  @foreach ($product as $product)
      <div class="col-md-6 col-sm-12">
        <div class="media wow fadeInUp" data-wow-delay="0.6s">
          <div class="media-object pull-left">
            <img src="../img/upload/<?php echo $product -> image?>" class="img-responsive" alt="Food Menu">
          </div>
          <div class="media-body">
            <h3 class="media-heading"><?php echo $product -> title?></h3>
            <p><?php echo $product -> description?></p>
          </div>
        </div>
      </div>
  @endforeach



    </div>
  </div>
</section>

<!-- Video section-->
<section id="video" class="parallax-section">
  <div class="overlay"></div>
    <div class="container">
      <div class="row">

          <div class="col-md-offset-2 col-md-8 col-sm-12">
              <a class="popup-youtube" href="https://www.youtube.com/watch?v=jnsgB_duJzY"><i class="fa fa-play"></i></a>
              <h2 class="wow fadeInUp" data-wow-delay="0.5s">Watch the video</h2>
              <p class="wow fadeInUp" data-wow-delay="0.8s">Activity - Entronica Outing</p>
          </div>

      </div>
    </div>
</section>



<!-- Gallery section -->
<section id="gallery" class="parallax-section">
  <div class="container">
    <div class="row">

      <div class="col-md-12">

       <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>ACTIVITY</h2>
            <h4>__________</h4>
        </div>
      </div>

          <!-- iso section -->
          <div class="iso-section wow fadeInUp" data-wow-delay="0.6s">

            		<ul class="filter-wrapper clearfix">
                        <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".JAN-MAR">JAN-MAR</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".APR-JUN">APR-JUN</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".JUL-SEP">JUL-SEP</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".OCT-DEC">OCT-DEC</a></li>
                    </ul>

                    <!-- iso box section -->
                    <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                      <div class="iso-box-wrapper col4-iso-box">

                        <div class="iso-box JAN-MAR col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="img/about5.png" data-lightbox-gallery="food-gallery">
                              <img src="img/about5.png" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>ACTIVITY JAN-MAR</h3>
                        </div>

                        <div class="iso-box JUL-SEP col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="img/about5.png" data-lightbox-gallery="food-gallery">
                              <img src="img/about5.png" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>ACTIVITY JUL-SEP</h3>
                        </div>

                        <div class="iso-box OCT-DEC col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="img/about5.png" data-lightbox-gallery="food-gallery">
                              <img src="img/about5.png" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>ACTIVITY OCT-DEC</h3>
                        </div>

                        <div class="iso-box JAN-MAR col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="img/about5.png" data-lightbox-gallery="food-gallery">
                              <img src="img/about5.png" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>ACTIVITY JAN-MAR</h3>
                        </div>

                        <div class="iso-box APR-JUN col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="img/about5.png" data-lightbox-gallery="food-gallery">
                              <img src="img/about5.png" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>ACTIVITY APR-JUN</h3>
                        </div>

                        <div class="iso-box JUL-SEP col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="img/about5.png" data-lightbox-gallery="food-gallery">
                              <img src="img/about5.png" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                          <h3>ACTIVITY JUL-SEP</h3>
                        </div>

                       </div>
                    </div>

          </div>

      </div>

    </div>
  </div>
</section>

<section id="contact">
	</section>
<footer>
	<div class="container">
		<div class="row">

              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
                <h3>PROFILE</h3>
                <p>Entronica is an IT solution provider and system integrator company based in Thailand. We provide software solution
									, implementation, integration, including professional and consultancy service on IT and telecommunication area..</p>
              </div>

              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.6s">
                <h3>CONTACT | MAP</h3>
                <p>31 Phyathai Building Suite</p>
								<p>No. 911-913, 9th Floor,</p>
                <p>Phayathai Rd., Kwang Phayathai Road,Ratchathewi, Bangkok 10400</p>
                <p>02-000-0000</p>
              </div>

              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.9s">
                <h3>NETWORK WITH US</h3>
								<ul class="social-icon">
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-dribbble"></a></li>
								</ul>
								 <h3>JOB APPLICATION FORM</h3>
                  <a href="#" class="btn btn-lg btn-success" data-toggle="modal" data-target="#basicModal">JOIN US</a>
              </div>

              <div class="modal fade " id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">JOIN US</h4>
                    </div>
                    <div class="modal-body">
                      <form class="form-horizontal" method='post' enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="Position" class="col-sm-3 control-label">Position</label>
                          <div class="col-sm-9">
                            <select id="Position" class="form-control input-sm" name="city_id">
                                 <option value="">JAVA Programmer</option>
                                 <option value="">System Analyst</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="name" class="col-sm-3 control-label">Name</label>
                          <div class="col-sm-9">
                            <input type="name" class="form-control" id="name" placeholder="name">
                          </div>
                        </div>

                        <div class="form-group">
                          <label for="lastname" class="col-sm-3 control-label">Lastname</label>
                          <div class="col-sm-9">
                            <input type="name" class="form-control" id="lastname" placeholder="lastname">
                          </div>
                        </div>




                        <div class="form-group">
                            <label for="radio" class="col-sm-3 control-label">Gender</label>
                            <div class="col-sm-9">
                              <div class="radio">
                                <label for="radio1">
                                <input type="radio" id="radio1" name="radio" value="radio 1 value" checked>
                                Female
                              </label>
                              </div>
                              <div class="radio">
                                <label for="radio2">
                                <input type="radio" id="radio2" name="radio" value="radio 2 value">
                                Male
                              </label>
                              </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="age" class="col-sm-3 control-label">Age</label>
                                <div class="col-sm-2">
                                <select id="age" class="form-control input-sm" name="age">
                                    <option value="">20</option>
                               </select>
                                </div>
                            </label>
                          </div>

                          <div class="form-group">
                            <label for="brithday" class="col-sm-3 control-label">Brithday</label>
                            <div class="col-sm-9">
                              <input type="brithday" class="form-control" id="brithday" placeholder="xx/xx/xxxx">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="nationality" class="col-sm-3 control-label">Nationality</label>
                            <div class="col-sm-9">
                              <input type="nationality" class="form-control" id="nationality" placeholder="nationality">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="address" class="col-sm-3 control-label">Address</label>
                            <div class="col-sm-9">
                              <input type="address" class="form-control" id="address" placeholder="address">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="email" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control" id="email" placeholder="email">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="telephone" class="col-sm-3 control-label">Telephone</label>
                            <div class="col-sm-9">
                              <input type="telephone" class="form-control" id="telephone" placeholder="telephone">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="currentposition" class="col-sm-3 control-label">Currentposition</label>
                            <div class="col-sm-9">
                              <input type="currentposition" class="form-control" id="currentposition" placeholder="currentposition">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="education" class="col-sm-3 control-label">Education</label>
                            <div class="col-sm-9">
                              <input type="education" class="form-control" id="education" placeholder="education">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="experience" class="col-sm-3 control-label">Experience</label>
                            <div class="col-sm-9">
                              <input type="experience" class="form-control" id="experience" placeholder="experience">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="expectedsalary" class="col-sm-3 control-label">Expectedsalary</label>
                            <div class="col-sm-9">
                              <input type="expectedsalary" class="form-control" id="expectedsalary" placeholder="expectedsalary">
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="resume" class="col-sm-3 control-label">File resume</label>
                            <div class="col-sm-9">
                              {{ Form::file('image', null, ['class'=>'form-control']) }}
                            </div>
                          </div>


                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            {{  Form::submit('save', ['class'=>'btn btn-primary']) }}
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

		</div>
	</div>
</footer>



<!-- javscript js -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script src="../js/jquery.magnific-popup.min.js"></script>

<script src="../js/jquery.sticky.js"></script>
<script src="../js/jquery.backstretch.min.js"></script>

<script src="../js/isotope.js"></script>
<script src="../js/imagesloaded.min.js"></script>
<script src="../js/nivo-lightbox.min.js"></script>

<script src="../js/jquery.flexslider-min.js"></script>

<script src="../js/jquery.parallax.js"></script>
<script src="../js/smoothscroll.js"></script>
<script src="../js/wow.min.js"></script>

<script src="../js/custom.js"></script>

</body>
</html>
