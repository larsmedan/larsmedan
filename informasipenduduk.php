<?php
include_once("../koneksi.php");
$result=mysqli_query($conn,"SELECT * FROM informasipenduduk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Document</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <h1 class="text-light">Admin<a href="index.html" ></a></h1>
        <div class="social-links mt-3 text-center">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="objekwisata.php" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Objek Wisata</span></a></li>
          <li><a href="informasipenduduk.php" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Informasi Penduduk</span></a></li>
          <li><a href="penghasilanutama.php" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Penghasilan Utama</span></a></li>
          <li><a href="logout.php" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Logout</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
        <h1>INFORMASI PENDUDUK</h1>
        </div>
    <a href="tambahdatapenduduk.php" class="btn btn-success">(+)TAMBAH DATA</a>
        <div class="row">
        <table class="table table-striped">
    <thead class="thead-dark">
    <tr>
      <th scope="col">NOMOR DATA</th>
      <th scope="col">NAMA INFORMASI PENDUDUK</th>
      <th scope="col">DESKRIPSI SINGKAT</th>
      <th scope="col">DESKRIPSI LENGKAP</th>
      <th scope="col">FOTO</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
  <?php
    while($nonim=mysqli_fetch_array($result)){
    ?>
    <tr>
      <td><?php echo $nonim['nomordata'] ?></td>
      <td><?php echo $nonim['namainformasipenduduk'] ?></td>
      <td><?php echo $nonim['deskripsisingkat'] ?></td>
      <td><?php echo $nonim['deskripsilengkap'] ?></td>
      <td><?php echo $nonim['foto'] ?></td>
      <td><?php echo $nonim['status'] ?></td>
      <td>
            <a href="editinformasipenduduk.php?nomordata=<?php echo $nonim['nomordata']; ?>">EDIT</a>||
            <a href="hapusinformasipenduduk.php?nomordata=<?php echo $nonim['nomordata']; ?>">HAPUS</a>
      </td>
    </tr>
        
    <?php
    }
    ?>
    
  </tbody>
        </table>
        </div>

      </div>
    </section><!-- End About Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/ -->
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>