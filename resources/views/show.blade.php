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
     @foreach ($Home as $Home)
        <img src="../img/upload/<?php echo $Home -> image?>" class="img-responsive"data-wow-delay="1.0s">

				<p class="wow fadeInUp" data-wow-delay="1.0s"><?php echo $Home -> title?></p>
     @endforeach
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
        <li><a href="#"><img src="img/th.png" class="img-responsive"data-wow-delay="1.0s"></a></li>
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
      @foreach ($about as $about)
      <div class="wow fadeInUp col-md-4 col-sm-5" data-wow-delay="0.3s">

        <img src="../img/upload/<?php echo $about -> image?>" class="img-responsive" >
        <h3><?php echo $about -> title?></h3>
        <p><?php echo $about -> description?></p>
      </div>
        @endforeach


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

  <div class="col-md-12 col-sm-12">
    @foreach ($product as $product)

        <div class="media wow fadeInUp" data-wow-delay="0.6s">
          <div class="media-object pull-left">
            <img src="../img/upload/<?php echo $product -> image?>" class="img-responsive" alt="Food Menu">
          </div>
          <div class="media-body">
            <h3 class="media-heading"><?php echo $product -> title?></h3>
            <p><?php echo $product -> description?></p>
          </div>
        </div>
    @endforeach
  </div>




    </div>
  </div>
</section>



<!-- Gallery section -->
<section id="gallery" class="parallax-section" style="background:rgb(240,240,240);">

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



                    <!-- iso box section -->
                    <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                      <div class="iso-box-wrapper col4-iso-box">

                      @foreach ($Activity as $Activity)
                        <div class="iso-box col-md-4 col-sm-6">
                          <div class="gallery-thumb">
                            <a href="../img/upload/<?php echo $Activity -> image?>" data-lightbox-gallery="food-gallery">
                              <img width='200px' height='175px'src="../img/upload/<?php echo $Activity -> image?>" class="fluid-img" alt="Gallery">
                                <div class="gallery-overlay">
                                  <div class="gallery-item">
                                    <i class="fa fa-search"></i>
                                  </div>
                                </div>
                            </a>
                          </div>
                        </div>
                      @endforeach

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
                @foreach ($Footers as $Footers)
              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
                <h3><?php echo $Footers -> title?></h3>
                <p><?php echo $Footers -> description?></p>
              </div>
                @endforeach



              <div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.9s">
                <h3>NETWORK WITH US</h3>
								<ul class="social-icon">
									<li><a href="#" class="fa fa-facebook"></a></li>
									<li><a href="#" class="fa fa-twitter"></a></li>
									<li><a href="#" class="fa fa-dribbble"></a></li>
								</ul>
								 <h3>JOB APPLICATION FORM</h3>
                 {{ Html::link('jobapps/create', 'JOIN US', array(
                     'class' => 'btn btn-primary'
             ))}}
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
