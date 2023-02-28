<?Php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
   <link rel="icon" type="image/png" href="favicon.ico">
  <title>
    Perpustakaan V2
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
</head>

  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header pb-0 text-start">
                  <h4 class="font-weight-bolder">Masuk</h4>
                  <p class="mb-0">Masukkan Username dan Password Anda Untuk Masuk</p>
                </div>
                <div class="card-body">
                  <form role="form" action="Routes/proses.php" method="POST">
                    <div class="mb-3">
                      <input type="text" class="form-control form-control-lg" placeholder="Username" name="username" aria-label="username">
                    </div>
                    <div class="mb-3">
                      <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" aria-label="password">
                    </div>
                    <div class="text-center">
                      <input type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" name="login" value="LOGIN">
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Tidak Memiliki Akun?
                    <a href="javascript:;" class="text-primary text-gradient font-weight-bold">Register</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg');
          background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Lorem"</h4>
                <p class="text-white position-relative">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ea, laborum voluptates minus ducimus illum quisquam? Doloribus hic commodi maxime eaque at blanditiis quidem, voluptate quisquam eos asperiores consequatur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <?php
  if($_SESSION['success']!= ''){
  ?>

  <script>
      Swal.fire(
      'Selamat  Tinggal,',
      '<?= $_SESSION['success']; ?>' ,
      'success'
    )
  </script>

  <?php
  }
  unset($_SESSION['success'])
  ?>

   <?php
  if($_SESSION['fail']!= ''){
  ?>

  <script>
      Swal.fire(
      'Gagal,',
      '<?= $_SESSION['fail']; ?>' ,
      'warning'
    )
  </script>

  <?php
  }
  unset($_SESSION['fail'])
  ?>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>