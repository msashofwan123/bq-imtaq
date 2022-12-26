<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <title>Pendaftaran Santri Baru Baitul Qur'an</title>

  <!-- Bootstrap core CSS -->
  <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
  <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.1/dist/sweetalert2.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.1/dist/sweetalert2.min.js"></script>



  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-onix-digital.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <!--

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        </br>
        <h2 style="text-align:center">Data Pendaftar</h2>
        <div class="main-blue-button-hover" style="text-align:center;"><a href="#" id="get-data">TAMPILKAN PENDAFTAR BQ IMTAQ</a></div>
        <div id="show-data"></div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    // Acc
    $(document).on("click", ".naccs .menu div", function() {
      var numberIndex = $(this).index();

      if (!$(this).is("active")) {
        $(".naccs .menu div").removeClass("active");
        $(".naccs ul li").removeClass("active");

        $(this).addClass("active");
        $(".naccs ul").find("li:eq(" + numberIndex + ")").addClass("active");

        var listItemHeight = $(".naccs ul")
          .find("li:eq(" + numberIndex + ")")
          .innerHeight();
        $(".naccs ul").height(listItemHeight + "px");
      }
    });
  </script>
  <script src="tabel-pendaftar.js">
  </script>
</body>

</html>