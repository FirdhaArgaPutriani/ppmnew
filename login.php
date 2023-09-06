<?php
require_once('connection.php');

if (isset($_SESSION['nip'])) {
  header("Location: index_admin.php");
}

session_start();
if (isset($_POST['submit'])) {
  $nip = $_POST['nip'];
  $password = md5($_POST['password']);

  $sql = "SELECT * FROM users WHERE nip='$nip' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['nip'] = $row['nip'];
    header("Location: index_admin.php");
  } else {
    echo "<script>alert('NIP atau password Anda salah. Silahkan coba lagi!')</script>";
  }
}
?>

<?php require_once('connection.php') ?>

<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path=".http://localhost/ppmnew/assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Log In</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="http://localhost/ppmnew/assets/img/favicon/favicon-new.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="http://localhost/ppmnew/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="http://localhost/ppmnew/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="http://localhost/ppmnew/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="http://localhost/ppmnew/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="http://localhost/ppmnew/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->
  <!-- Page -->
  <link rel="stylesheet" href="http://localhost/ppmnew/assets/vendor/css/pages/page-auth.css" />
  <!-- Helpers -->
  <script src="http://localhost/ppmnew/assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="http://localhost/ppmnew/assets/js/config.js"></script>
</head>

<body>
  <!-- Content -->

  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="app-brand justify-content-center">
              <a href="http://localhost/ppmnew/index.php" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img src="http://localhost/ppmnew/assets/img/favicon/ppm-new.png" width="70">
                </span>
              </a>
            </div>
            <!-- /Logo -->
            <h4 class="mb-0 text-center">Welcome to PPM!</h4>
            <br>

            <form id="formAuthentication" class="mb-3" action="" method="POST">
              <div class="mb-3">
                <label for="nip" class="form-label">NIP</label>
                <input type="text" class="form-control" id="nip" name="nip" placeholder="Enter your NIP" autofocus />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit" name="submit">Log in</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="http://localhost/ppmnew/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="http://localhost/ppmnew/assets/vendor/libs/popper/popper.js"></script>
  <script src="http://localhost/ppmnew/assets/vendor/js/bootstrap.js"></script>
  <script src="http://localhost/ppmnew/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="http://localhost/ppmnew/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="http://localhost/ppmnew/assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>