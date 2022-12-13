<?php

include 'database/koneksi.php';

$data_siswa = mysqli_query($conn,"SELECT * FROM pendaftar");

$jumlah_siswa = mysqli_num_rows($data_siswa);
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

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logo.png">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="index.html" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="index.html#services">Keunggulan</a></li>
              <li class="scroll-to-section"><a href="index.html#about">Visi</a></li>
              <li class="scroll-to-section"><a href="index.html#portfolio">Ekstrakurikuler</a></li>
              <li class="scroll-to-section"><a href="index.html#contact">Hubungi Kami</a></li> 
              <li class="scroll-to-section"><div class="main-red-button-hover"><a href="coming soon/index.html">Daftar Sekarang</a></div></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

<div class="our-services section">

<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <form action="proses.php" method="POST">
	    
		    <h2><center>Formulir Pendaftaran Santri Baru</h2>

          <div class="panel panel-primary">
            <div class="panel-heading">
              Wajib Mengisi Data Dengan Sesuai dan Akurat
            </div>
          <div class="panel panel-body">

            <div class="form-group">
              <label for="id">Id Siswa (Diisi Oleh Sistem)</label>
              <input type="number" name="id" placeholder="Id Mahasantri" class="form-control" readonly />
            </div>

            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" name="nama" placeholder="Nama Lengkap" class="form-control">
            </div>

            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input type="text" name="alamat" placeholder="Alamat" class="form-control" />
            </div>

            <div class="form-group">
              <label for="tlahir">Tanggal Lahir</label>
              <input type="date" name="tlahir" placeholder="" class="form-control" />
            </div>

            <div class="form-group">
                <label for="telepon">Nomor Telepon</label>
                <input type="number" name="handphone" placeholder="6281234567890"  class="form-control"/>
            </div>

            <div class="form-group">
              <label for="alasan">Alasan Masuk Pesantren</label>
              <input type="text" name="alasan" placeholder="Ingin Menjadi Sopir" class="form-control" />
            </div>

            <div class="form-group">
              <button value="daftar" class="btn btn-success send" name="daftar">Daftar</button>
            </div>
		
          </div>
          </div>
	    </form>
    </div>

    <div class="col-lg-6">
        <h2 style="text-align:center">Ketentuan Pendaftaran</h2>
        <div class="panel panel-info">
            <div class="panel-heading">
              <strong>SYARAT UMUM</strong>
            </div>
            <div class="panel panel-body">
            
            <div class="col-lg-10">
              <h4>
                <ol>
                  <br>
                  <li>1. Kelas 6 SD/MI Sederajat</li>
                  <li>2. Hafal Juz 30 (Minimal Hafalan 1 Juz)</li>
                  <li>3. Mampu Baca Tulis Al-Qur'an dengan baik</li>
                </ol>
              </h4>
            </div>
            </div>
        </div>

        <div class="panel panel-success">
            <div class="panel-heading">
              <strong>SYARAT ADMINISTRASI</strong>
            </div>
            <div class="panel panel-body">
            
            <div class="col-lg-12">
              <h5>
                <ol>
                  <br>
                  <li>1. Mendaftar melalui Whatsaapp <strong>(DAFTAR IMTAQ/NAMA)</strong></li><br>
                  <li>2. FC Akte Kelahiran Sebanyak 2 Lembar</li><br>
                  <li>3. FC Ijazah SD/MI sebanyak 2 Lembar (Bisa Menyusul)</li><br>
                  <li>4. FC KK & KTP ORTU/Wali 2 Lembar</li><br>
                  <li>5. Pas Poto Berwanra Terbaru; 2x3, 3x4, BG Biru (3 Lembar)</li><br>
                  <li>6. Membayar Biaya Pendaftaran Sebesar Rp.200.000,-</li><br>
                  <li>7. No. Rekening: <br> <strong>7 212 639 081</strong> an. PSB BAITUL QURAN</li><br>
                  <li>8. Konfirmasi Transfer Ke Nomor Whatsapp <strong>0896 5373 2962</strong> (Ust. Munir Ramadhan)</li> </br>
                  <li>Jumlah Siswa Terdaftar Hingga Saat ini = <b><?php echo $jumlah_siswa; ?></b></li>
                </ol>
              </h5>
            </div>
            </div>
        </div>
    </div>
        
  </div>
</div>

  <div id="contact" class="contact-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="section-heading">
            <h2>Silahkan <em>Hubungi</em> Kami lewat <span>Kolom berikut</span></h2>
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15811.042062983199!2d110.92173090781249!3d-7.815155699999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a2e4e3aaec4cf%3A0x504e820c5322948c!2sMa&#39;had%20Aly%20BAITUL%20QUR&#39;AN!5e0!3m2!1sid!2sid!4v1669165101135!5m2!1sid!2sid" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
            <div class="info">
              <span><i class="fa fa-phone"></i> <a href="#">0896 5373 2962</a></span>
              <span><i class="fa fa-map-marker"></i> <a href="#">Jl. Cempaka V, Pokoh <br>Rt.01/IV Kel. Wonoboyo</a></span>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <form id="contact" action="" method="get">
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="surname" name="surname" id="surname" placeholder="Surname" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="website" id="website" placeholder="Your Website URL" required="">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="main-button">Submit Request</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="contact-dec">
      <img src="assets/images/contact-dec.png" alt="">
    </div>
    <div class="contact-left-dec">
      <img src="assets/images/contact-left-dec.png" alt="">
    </div>
  </div>

  <div class="footer-dec">
    <img src="assets/images/footer-dec.png" alt="">
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="about footer-item">
            <div class="logo">
              <a href="#"><img src="assets/images/logo.png" alt="Onix Digital TemplateMo"></a>
            </div>
            <a href="#">Baitul Qur'an Wonogiri</a>
            <ul>
              <li><a href="https://www.facebook.com/bqwonogiri"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://wa.me/6289653732962"><i class="fa fa-whatsapp"></i></a></li>
              <li><a href="https://baitulquranwng.com/"><i class="fa fa-globe"></i></a></li>
              <li><a href="https://www.instagram.com/baitul_quran_wonogiri/?hl=id"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="services footer-item">
            <h4>Seputar Pendaftaran</h4>
            <ul>
              <li><a href="#">Materi Tes</a></li>
              <li><a href="#">Rincian Biaya</a></li>
              <li><a href="#">Persyaratan Pendaftaran</a></li>
              <li><a href="#">Tes Wawancara</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="community footer-item">
            <h4>Informasi Lain</h4>
            <ul>
              <li><a href="#">Galeri Kegiatan</a></li>
              <li><a href="#">Kurikulum Pendidikan</a></li>
              <li><a href="#">Tenaga Pendidikan</a></li>
              <li><a href="#">Kesan Pesan Alumni</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="subscribe-newsletters footer-item">
            <h4>Ikutin Pembaruan Kami</h4>
            <p>Dapatkan informasi terbaru melalui email anda</p>
            <form action="#" method="get">
              <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
              <button type="submit" id="form-submit" class="main-button "><i class="fa fa-paper-plane-o"></i></button>
            </form>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright">
            <p>Copyright © 2022 Baitul Qur'an Wonogiri | All Rights Reserved. 
            <br>
            Designed by <a rel="nofollow" href="https://shofwan-cv.netlify.app/" title="Web Designer">El-Rasheed</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


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
</body>
</html>

