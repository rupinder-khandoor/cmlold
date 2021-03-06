<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
} else {
  $loggedin = false;
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title><?php echo $title; ?></title>


  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="/cmlold/plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="/cmlold/plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="/cmlold/plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="/cmlold/plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="/cmlold/plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="/cmlold/plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="/cmlold/css/style.css" rel="stylesheet">
  <link href="/cmlold/css/faculty_style.css" rel="stylesheet">


  <!--Favicon-->
  <link rel="shortcut icon" href="/cmlold/images/cmlfavicon.png" type="image/x-icon">
  <link rel="icon" href="/cmlold/images/cmlfavicon.png" type="image/x-icon">

</head>

<body>
  <!-- header -->
  <header class="fixed-top header">
    <!-- navbar -->
    <div class="navigation w-100">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark p-0">
          <a class="navbar-brand logo" href="/cmlold"><img src="/cmlold/images/cml_logo.png" alt="CML-GNDEC"></a>
          <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto text-center">
              <li class="nav-item <?php echo ($active == 'home' ? 'active' : '') ?>">
                <a class="nav-link" href="/cmlold">Home</a>
              </li>
              <li class="nav-item <?php echo ($active == 'about' ? 'active' : '') ?>">
                <a class="nav-link" href="/cmlold/aboutus.php">About</a>
              </li>
              <li class="nav-item <?php echo ($active == 'faculty' ? 'active' : '') ?>">
                <a class="nav-link" href="/cmlold/faculty.php">Faculty</a>
              </li>
              <li class="nav-item <?php echo ($active == 'event' ? 'active' : '') ?>">
                <a class="nav-link" href="/cmlold/events.php">EVENTS</a>
              </li>
              <li class="nav-item <?php echo ($active == 'contact' ? 'active' : '') ?>">
                <a class="nav-link" href="/cmlold/contactus.php">CONTACT</a>
              </li>
              <?php
              if ($loggedin) {
                echo '<li class="nav-item">
                <a class="nav-link" href="/cmlold/admin/logout.php">Logout</a>';
              }
              ?>
              <li class="nav-item">
                <a class="nav-link" href="https://gndec.ac.in/" target="_blank">GNDEC Home</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- /header -->
