
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">



    <!-- Portfolio Grid Section -->
    <section id="portfolio">
      <div class="container">
        <h2 class="text-center">ACTIVITY</h2>
        <hr class="star-primary">
        <div class="row">
          @foreach ($Activity as $i)
            <div class="col-sm-4 portfolio-item">
              <a class="portfolio-link" href="#<?php echo $i -> name?>" data-toggle="modal">
                <div class="caption">
                  <div class="caption-content">
                    <i class="fa fa-search-plus fa-3x"></i>
                  </div>
                </div>
                <img class="img-fluid" src="../img/upload/<?php echo $i -> image?>" alt="">
              </a>
            </div>
          @endforeach


x
        </div>
      </div>
    </section>




    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top d-lg-none">
      <a class="btn btn-primary js-scroll-trigger" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <!-- Acticity1 -->
          <section id="portfolio">
            <div class="container">
              <h2 class="text-center">Acticity1</h2>
              <hr class="star-primary">
              <div class="row">

                <div class="col-sm-4 portfolio-item">
                  <a class="portfolio-link" href="#portfolioModal1-1" data-toggle="modal">
                    <div class="caption">
                      <div class="caption-content">
                        <i class="fa fa-search-plus fa-3x"></i>
                      </div>
                    </div>
                    <img class="img-fluid" src="img/portfolio/cabin.png" alt="">
                  </a>
                </div>

              </div>
            </div>
          </section>

        </div>
      </div>
    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal1-1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <!-- Acticity1 -->
          <section id="portfolio">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <div class="modal-body">
                    <img class="img-fluid img-centered" src="img/portfolio/cabin.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>







    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>



  </body>

</html>
