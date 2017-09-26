<!DOCTYPE html>
<html lang="en">
<head>

	<title>ENTRONICA</title>

  	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
  	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/hover-min.css">
  <link rel="stylesheet" href="css/flexslider.css">
	<link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
<style type="text/css">
.map-responsive{
	overflow:hidden;
	padding-bottom:56.25%;
	position:relative;
	height:0;
}
.map-responsive iframe{
	left:0;
	top:0;
	height:100%;
	width:100%;
	position:absolute;
}
</style>
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
      <img src="../img/logo ent_new.png" alt="" style="margin-top: 15px">
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="smoothScroll">หน้าแรก</a></li>
        <li><a href="#about" class="smoothScroll">เกี่ยวกับ</a></li>
        <li><a href="#team" class="smoothScroll">ผู้มีส่วนร่วม</a></li>
        <li><a href="#menu" class="smoothScroll">สินค้า & บริการ</a></li>
        <li><a href="#gallery" class="smoothScroll">รูปภาพกิจกรรม</a></li>
				<li><a href="DetailJobTh/show" class="smoothScroll">สมัครงาน</a></li>
        <li><a href="#contact" class="smoothScroll">ติดต่อ</a></li>
				<li><a href="/"><img width="35px" height="20px"  src="img/EN.png" alt=""></a></li>
				<li><a href="showth"><img width="35px" height="20px"  src="img/TH.png" alt=""></a></li>
      </ul>
    </div>

  </div>
</div>




<!-- About section -->
<section id="about" class="parallax-section">
	<div class="container">
		<div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
          <div class="wow fadeInUp section-title" data-wow-delay="0.3s">
            <h2>เกี่ยวกับ</h2>
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
            <h2>ผู้มีส่วนร่วม</h2>
            <h4>_______________</h4>
        </div>
      </div>

      <div class="clearfix"></div>
@foreach ($partner as $partner)
      <div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
          <div class="team-thumb">
              <img src="../img/upload/<?php echo $partner -> image?>" class="img-responsive" alt="Team">>
                <div class="team-des">
                  <h3>ผู้มีส่วนร่วม</h3>
                    <ul class="social-icon">
                      <li><a href="<?php echo $partner -> Facebook?>" class="fa fa-facebook"></a></li>
                      <li><a href="<?php echo $partner -> Twitter?>" class="fa fa-twitter"></a></li>
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
            <h2>สินค้า & บริการ</h2>
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
		<div class="wow fadeInUp section-title" data-wow-delay="0.3s">
			 <h2>รูปภาพกิจกรรม</h2>
			 <h4>__________</h4>
	 </div>
    <div class="row">
          <div class="iso-section wow fadeInUp" data-wow-delay="0.6s">
							<div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
								<div class="iso-box-wrapper col4-iso-box">
									@foreach ($Activity as $Activity)
										<div class="iso-box col-sm-4">
											<div class="gallery-thumb">
												<a href="showalbum">
													<img src="../img/upload/<?php echo $Activity -> image?>" class="fluid-img" alt="Gallery" >
														<div class="gallery-overlay">
															<div class="gallery-item">
																<i class="fa fa-search"></i>
															</div>
														</div>
												</a>
											</div>
											<h3><?php echo $Activity -> name?></h3>
										</div>
									@endforeach
									@foreach ($Album1 as $Album1)
										<div class="iso-box col-sm-4">
											<div class="gallery-thumb">
												<a href="showalbum2">
													<img src="../img/upload/<?php echo $Album1 -> image?>" class="fluid-img" alt="Gallery" >
														<div class="gallery-overlay">
															<div class="gallery-item">
																<i class="fa fa-search"></i>
															</div>
														</div>
												</a>
											</div>
											<h3><?php echo $Album1 -> name?></h3>
										</div>
									@endforeach
									@foreach ($Album2 as $Album2)
										<div class="iso-box col-sm-4">
											<div class="gallery-thumb">
												<a href="showalbum3">
													<img src="../img/upload/<?php echo $Album2 -> image?>" class="fluid-img" alt="Gallery" >
														<div class="gallery-overlay">
															<div class="gallery-item">
																<i class="fa fa-search"></i>
															</div>
														</div>
												</a>
											</div>
											<h3><?php echo $Album2 -> name?></h3>
										</div>
									@endforeach
									@foreach ($Album3 as $Album3)
										<div class="iso-box col-sm-4">
											<div class="gallery-thumb">
												<a href="showalbum4">
													<img src="../img/upload/<?php echo $Album3 -> image?>" class="fluid-img" alt="Gallery" >
														<div class="gallery-overlay">
															<div class="gallery-item">
																<i class="fa fa-search"></i>
															</div>
														</div>
												</a>
											</div>
											<h3><?php echo $Album3 -> name?></h3>
										</div>
									@endforeach
									@foreach ($Album4 as $Album4)
										<div class="iso-box col-sm-4">
											<div class="gallery-thumb">
												<a href="showalbum5">
													<img src="../img/upload/<?php echo $Album4 -> image?>" class="fluid-img" alt="Gallery" >
														<div class="gallery-overlay">
															<div class="gallery-item">
																<i class="fa fa-search"></i>
															</div>
														</div>
												</a>
											</div>
											<h3><?php echo $Album4 -> name?></h3>
										</div>
									@endforeach
									@foreach ($Album5 as $Album5)
										<div class="iso-box col-sm-4">
											<div class="gallery-thumb">
												<a href="showalbum6">
													<img src="../img/upload/<?php echo $Album5 -> image?>" class="fluid-img" alt="Gallery" >
														<div class="gallery-overlay">
															<div class="gallery-item">
																<i class="fa fa-search"></i>
															</div>
														</div>
												</a>
											</div>
											<h3><?php echo $Album5 -> name?></h3>
										</div>
									@endforeach
									@foreach ($Album6 as $Album6)
										<div class="iso-box col-sm-4">
											<div class="gallery-thumb">
												<a href="showalbum7">
													<img src="../img/upload/<?php echo $Album6 -> image?>" class="fluid-img" alt="Gallery" >
														<div class="gallery-overlay">
															<div class="gallery-item">
																<i class="fa fa-search"></i>
															</div>
														</div>
												</a>
											</div>
											<h3><?php echo $Album6 -> name?></h3>
										</div>
									@endforeach
									@foreach ($Album7 as $Album7)
										<div class="iso-box col-sm-4">
											<div class="gallery-thumb">
												<a href="showalbum8">
													<img src="../img/upload/<?php echo $Album7 -> image?>" class="fluid-img" alt="Gallery" >
														<div class="gallery-overlay">
															<div class="gallery-item">
																<i class="fa fa-search"></i>
															</div>
														</div>
												</a>
											</div>
											<h3><?php echo $Album7 -> name?></h3>
										</div>
									@endforeach
									@foreach ($Album8 as $Album8)
										<div class="iso-box col-sm-4">
											<div class="gallery-thumb">
												<a href="showalbum9">
													<img src="../img/upload/<?php echo $Album8 -> image?>" class="fluid-img" alt="Gallery" >
														<div class="gallery-overlay">
															<div class="gallery-item">
																<i class="fa fa-search"></i>
															</div>
														</div>
												</a>
											</div>
											<h3><?php echo $Album8 -> name?></h3>
										</div>
									@endforeach
								</div>
						</div>
          </div>
      </div>
    </div>


</section>

<section class="contactmap" id="contactmap">
      <h1>แผนที่</h1>
      <hr/>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1882.4877778283585!2d100.53622194163593!3d13.76091520228001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4dc88ebc01bb2a09!2sEntronica+Co.%2C+Ltd.!5e0!3m2!1sth!2sth!4v1505719889462" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
<br>
<br>
<!-- Footer section -->

<footer>
	<div class="container" id="contact">
		<div class="row">
		@foreach ($Footers as $Footers)
	<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.3s">
		<h3><?php echo $Footers -> title?></h3>
		<p><?php echo $Footers -> description?></p>
	</div>
		@endforeach
	<div class="wow fadeInUp col-md-4 col-sm-4" data-wow-delay="1.9s">
		@foreach ($Footers1 as $Footers)
		<h3><?php echo $Footers -> title?></h3>
		<ul class="social-icon">
			<li><a href="<?php echo $Footers -> Facebook?>" class="fa fa-facebook"></a></li>
			<li><a href="<?php echo $Footers -> Twitter?>" class="fa fa-twitter"></a></li>
		</ul>
		@endforeach
		@foreach ($Footers2 as $Footers)
		<h3><?php echo $Footers -> title?></h3>
		@endforeach
		 {{ Html::link('DetailJobTh/show', 'สมัครงาน', array('class' => 'btn btn-primary')) }}
		</div>


		</div>
	</div>
</footer>



<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.backstretch.min.js"></script>

<script src="js/isotope.js"></script>
<script src="js/imagesloaded.min.js"></script>
<script src="js/nivo-lightbox.min.js"></script>

<script src="js/jquery.flexslider-min.js"></script>

<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>

<script src="js/custom.js"></script>





</body>
</html>
