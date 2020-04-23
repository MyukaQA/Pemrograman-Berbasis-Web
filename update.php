<?php
if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $getfile = file_get_contents('data.json');
    $jsonfile = json_decode($getfile, true);
    $jsonfile = $jsonfile["records"];
    $jsonfile = $jsonfile[$id];
}

if (isset($_POST["id"])) {
    $id = (int) $_POST["id"];
    $getfile = file_get_contents('data.json');
    $all = json_decode($getfile, true);
    $jsonfile = $all["records"];
    $jsonfile = $jsonfile[$id];

    $post["judul"]  = isset($_POST["judul"]) ? $_POST["judul"] : "";
    $post["author"] = isset($_POST["author"]) ? $_POST["author"] : "";
    $post["date"]   = isset($_POST["date"]) ? $_POST["date"] : "";
    $post["konten"] = isset($_POST["konten"]) ? $_POST["konten"] : "";



    if ($jsonfile) {
        unset($all["records"][$id]);
        $all["records"][$id] = $post;
        $all["records"] = array_values($all["records"]);
        file_put_contents("data.json", json_encode($all));
    }
    header("Location:index.php");
}
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
                  <li class="active"><a href="index.html">Home</a></li>
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
                  <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-2 rounded-0">Buat Berita</a></p>
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
                  <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-2 rounded-0">Buat Berita</a></p>
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
                <p class="mb-0"><a href="#" class="btn btn-primary px-4 py-2 rounded-0">Buat Berita</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="container">
      <h3 class="text-center">Update Berita</h3><br>
        <div class="row justify-content-center">
          <?php if (isset($_GET["id"])): ?>
          <form method="POST" action="">
            <input type="hidden" value="<?php echo $id ?>" name="id"/>
			      <div class="form-group ">
              <label for="inputJudul">Judul Berita</label>
              <input value="<?php echo $jsonfile["judul"]?>" type="text" class="form-control border border-dark" required="required" id="inputJudul" name="judul" placeholder="Judul Berita">
              <span class="help-block"></span>
			      </div>
			
			      <div class="form-group ">
				      <label for="inputAuthor">Author</label>
				      <input value="<?php echo $jsonfile["author"]?>" type="text" class="form-control border border-dark" required="required" id="inputAuthor" name="author" placeholder="Author">
        		  <span class="help-block"></span>
			      </div>
			
            <div class="form-group">
              <label for="inputDate">Tanggal</label>
              <input value="<?php echo $jsonfile["date"]?>" type="datetime-local" class="form-control border border-dark" required="required" id="inputDatetime" name="date" placeholder="Tanggal">
              <span class="help-block"></span>
            </div>

            <div class="form-group">
              <label for="inputKonten">Konten</label>
              <textarea value="<?php echo $jsonfile["konten"]?>" class="form-control border-dark" required="required" name="konten" id="inputKonten" cols="70" rows="8" placeholder="Isi Konten"></textarea>
              <span class="help-block"></span>
            </div>
    
            <div class="form-actions">
                <button type="submit" class="btn btn-success">Update</button>
                <a class="btn btn-danger" href="index.php">Back</a>
            </div>
          </form>
          <?php endif; ?>
        </div>
    </div>        
    
    <br><br><br>

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
