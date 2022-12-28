<?php 
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>


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
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
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

      <div class="col-lg-6">
        </br>
        <h2 style="text-align:center">Tabel Pendaftaran</h2>
        <div>
          <form id="form-submit" method="POST">

            <h2>
              <center>Formulir Pendaftaran Santri Baru
            </h2>

            <div class="panel panel-primary">
              <div class="panel-heading">
                Wajib Mengisi Data Dengan Sesuai dan Akurat
              </div>
              <div class="panel panel-body">

                <div class="form-group">
                  <label for="id">Id Santri (Diisi Oleh Sistem)</label>
                  <input type="number" name="id" id="id" placeholder="Id Santri" class="form-control" readonly />
                </div>

                <div class="form-group">
                  <label for="nama">Nama Lengkap<sup style="color:red">*</sup></label>
                  <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" class="form-control">
                </div>

                <div class="form-group">
                  <label for="alamat">Alamat<sup style="color:red">*</sup></label>
                  <input type="text" name="alamat" id="alamat" placeholder="Alamat" class="form-control" />
                </div>

                <div class="form-group">
                  <label for="tlahir">Tanggal Lahir<sup style="color:red">*</sup></label>
                  <input type="date" name="tlahir" id="tlahir" placeholder="" class="form-control" />
                </div>

                <div class="form-group">
                  <label for="telepon">Nomor Telepon<sup style="color:red">*</sup></label>
                  <input type="number" name="handphone" id="handphone" placeholder="6281234567890" class="form-control" />
                </div>

                <div class="form-group">
                  <label for="alasan">Alasan Masuk Pesantren<sup style="color:red">*</sup></label>
                  <input type="text" name="alasan" id="alasan" placeholder="Ingin Menjadi Sopir" class="form-control" />
                </div>
                <div class="form-group">
                  <label><sup style="color:red">*</sup> = Wajib DIisi</label>
                </div>

                <div class="form-group">
                  <button value="daftar" class="btn btn-success send" id="daftar" name="daftar">Daftar</button>
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col-lg-6">
        </br>
        <h2 style="text-align:center">Data Pendaftar</h2>
        <h3 style="text-align:center">SANTRI BARU IMTAQ SHIGHOR</h3>
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
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script> -->

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
  <script src="tabel-pendaftar.js"></script>
</body>

</html>