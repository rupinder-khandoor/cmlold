<?php
$eid = $_GET['id'];
include './config.php';
$error = false;
$Emessage;
$tagline = '';

$sql = "SELECT * FROM `eventdata` WHERE `id` = '$eid' ";
$res = mysqli_query($conn, $sql);
if (!$res) {
  $title = "Try Again Later";
  $Emessage = "Try Again Later";
  $error = true;
} else {
  if (mysqli_num_rows($res) == 0) {
    $title = "Event Not Found";
    $Emessage = "Event Not Found";
    $error = true;
  } else {
    $row = mysqli_fetch_assoc($res);
    $title = $row['name'];
    $tagline = is_null($row['tagline']) || empty($row['tagline']) ? '' : $row['tagline'];
    $image = $row['image'];
    $startDate = $row['startDate'];
    $endDate = $row['endDate'];
    $startTime = $row['startTime'];
    $endTime = $row['endTime'];
    $about = $row['about'];
    $registrationLink = is_null($row['registrationLink']) || empty($row['registrationLink']) ? "" : $row['registrationLink'];
  }
}

$active = 'event';
include './header.php';
?>



<body>
  <!-- page title -->
  <section class="page-title-section overlay norepeat" style="background-image: url(images/backgrounds/event-bg.png)">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb">
            <li class="list-inline-item"> <a class="h2 text-primary font-secondary" href="events.php">Events</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted"><?php echo $title; ?></li>
          </ul>
          <p class="text-lighten"> <?php echo $tagline ?> </p>
        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->

  <section class="section-sm">
    <div class="container">
      <?php if ($error) { ?>
        <h1>
          <?php echo $Emessage; ?>
        </h1>
      <?php
      } else {
      ?>

        <div class="row">
          <div class="col-12">
            <h2 class="section-title">
              <?php echo $title; ?>
            </h2>
          </div>
          <!-- event image -->
          <div class="col-12 mb-4">
            <img src="<?php echo $image; ?>" alt="event thumb" class="img-fluid w-100">
          </div>
        </div>
        <!-- event info -->
        <div class="row align-items-center mb-5">
          <div class="col-lg-9">
            <ul class="list-inline">
              <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
              </li>
              <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
                <div class="d-flex align-items-center">
                  <i class="ti-calendar text-primary icon-md mr-2"></i>
                  <div class="text-left">
                    <h6 class="mb-0">DATE</h6>
                    <p class="mb-0">
                      <?php echo $startDate; ?>
                    </p>
                  </div>
                </div>
              </li>
              <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
                <div class="d-flex align-items-center">
                  <i class="ti-time text-primary icon-md mr-2"></i>
                  <div class="text-left">
                    <h6 class="mb-0">TIME</h6>
                    <p class="mb-0">
                      <?php echo $startTime ?>
                    </p>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 text-lg-right text-left">
            <a href="<?php echo ($row['status'] == '' ? '0' : $registrationLink) ?>" class="btn btn-primary <?php echo ($row['status'] == '0' ? 'disabled' : '') ?>" target="_blank"><?php echo ($row['status'] == '0' ? 'Registration Closed' : 'Register Now');  ?></a>
          </div>
          <!-- border -->
          <div class="col-12 mt-4 order-4">
            <div class="border-bottom border-primary"></div>
          </div>
        </div>
        <!-- event details -->
        <div class="row">
          <div class="col-12 mb-50 event-content">
            <div class="about-us-content">
              <h3>About Event</h3>
              <p>
                <?php echo $about ?>
              </p>
            </div>
          </div>
        </div>

      <?php
      }
      ?>
    </div>
  </section>
  <?php
  include './footer.php';
  ?>