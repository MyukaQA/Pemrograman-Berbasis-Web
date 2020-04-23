<?php
$getfile = file_get_contents('data.json');
$jsonfile = json_decode($getfile);
?>
<!doctype html>
<html lang="en">

  <head>
    <title>Mylian Gedhe &mdash; UTS WEB D</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-lg-4">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                  <li class="active navbar-light"><a href="index.html">Home</a></li>
                </ul>
              </nav>
            </div>
            <div class="col-lg-4 text-center">
              <div class="site-logo">
                <a href="index.html">Myuka Blog</a>
              </div>

              <div class="ml-auto toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white"><span class="icon-menu h3 text-white"></span></a></div>
            </div>
          </div>
        </div>
      </header>

    
    <div class="owl-carousel owl-1">
      <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1" style="background-image: url('images/p1.jpg');">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                  <h1>UTS <span class="text-primary">Pemrograman Berbasis Web D</span>  </h1>
                  <p class="mb-0"><a href="insert.php" class="btn btn-primary px-4 py-2 rounded-0">Buat Berita</a></p>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1" style="background-image: url('images/p2.jpg');">
          <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center">
                  <h1>UTS <span class="text-primary">Pemrograman Berbasis Web D</span>  </h1>
                  <p class="mb-0"><a href="insert.php" class="btn btn-primary px-4 py-2 rounded-0">Buat Berita</a></p>
                </div>
              </div>
            </div>
        </div>
      </div>

      <div class="ftco-blocks-cover-1">
        <div class="ftco-cover-1" style="background-image: url('images/p3.jpg');">
          <div class="container">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <h1>UTS <span class="text-primary">Pemrograman Berbasis Web D</span>  </h1>
                <p class="mb-0"><a href="insert.php" class="btn btn-primary px-4 py-2 rounded-0">Buat Berita</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bagian Untuk CRUD -->
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <?php $no=0;foreach ($jsonfile->records as $index => $obj): $no++;  ?>
            <h2 class="heading-39291"><?php $no;?><?php echo $obj->judul;?></h2>
            <p class="mb-7">Dibuat Oleh <?php echo $obj->author;?> <?php echo $obj->date;?></p>
            <p><a href="single.php?id=<?php echo $index; ?>" class="more-39291">Baca Selengkapnya</a></p>
            <p><a href="update.php?id=<?php echo $index; ?>">Edit</a> <a href="delete.php?id=<?php echo $index; ?>">Hapus</a></p>
            <br><br>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Bagian Untuk CRUD -->

    <div class="site-section section-4">
      <div class="container">

        <div class="row justify-content-center text-center">
          <div class="col-md-7">
            <div class="slide-one-item owl-carousel">
              <blockquote class="testimonial-1">
                <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
                <p>MYLIAN GEDHE</p>
              </blockquote>

              <blockquote class="testimonial-1">
                <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
                <p>182410102048</p>
              </blockquote>
              
              <blockquote class="testimonial-1">
                <span class="quote quote-icon-wrap"><span class="icon-format_quote"></span></span>
                <p>PEMROGRAMAN BERBASIS WEB KELAS-D</p>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    <footer style="width: 100%; text-align: center;">
      <div class="container-fluid">
        <div class="row">
          <p class="copyright text-muted" style="width: 100%;">Copyright &copy; 182410102048 2020</p>
        </div>
      </div>
    </footer>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

  </body>

</html>
