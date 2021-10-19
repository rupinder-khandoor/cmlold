<?php
$title = 'Home';
$active = 'home';
include './header.php';
include './config.php'
?>
<!-- /header -->
<section class="hero-section overlay bg-cover" style="background-image: url(images/banner/index-banner.jpg)">>
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h2 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">Ethical and General Purpose Knowledge Club</h2>
            <p class="text-muted mb-4 text-lighten" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">Providing a platform for
              holistic development and grooming the overall personality of students. And also providing students with
              resources and opportunities that will help in building a successful career.</p>
            <a href="/about" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">About us</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-p-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">We organize, You celebrate!</h1>
            <p class="text-muted mb-4 text-lighten" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Center for multi-faceted
              learning keeps on conducting
              these types of events through out the session which will enhance your knowlegde, interpersonal skills and grow yourself more.</p>
            <a href="/events" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Events</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">We would love to hear from you</h1>
            <p class="text-muted mb-4 text-lighten" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Fill this Contact form with any questions or inquiries. Our support team is always here to get back to you.</p>
            <a href="/contact" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Contact us</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- about us -->
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">About CML-GNDEC</h2>
        <div class="about-us-content">
          <p>A newly established center "Center for Multi-Faceted Learning" in Guru Nanak Dev Engineering College,
            Ludhiana is fully ready for the holistic development of students.
            The focus of this center is to hone the communication, interpersonal, problem-solving skills and further
            develop the overall personality of students.
            Also guiding students towards building a successful career by identifying their fields of interest and
            providing them sufficient training for competitive examinations.
          </p>
        </div>
        <a href="aboutus.php" class="btn btn-primary-outline">Learn more</a>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="images/about/aboutcml.png" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->
<!-- cta -->
<section class="section bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title text-white">Center For Multi-Faceted Learning</h2>
        <a href="https://forms.gle/zf1UKS6cQqGwLJBz8" target="_blank" class="btn btn-secondary">join now</a>
      </div>
    </div>
  </div>
</section>
<!-- /cta -->

<?php
$sql = "SELECT `id`, `name`, `about`, `image`, `startDate` FROM `eventdata` ORDER BY `id` DESC LIMIT 3";
$res = mysqli_query($conn, $sql);
if (!$res) {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} else {
  if (mysqli_num_rows($res) < 0) {
  } else {
?>
    <section class="section bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="d-flex align-items-center section-title justify-content-between">
              <h2 class="mb-0 text-nowrap mr-3">Events</h2>
              <div class="border-top w-100 border-primary d-none d-sm-block"></div>
              <div>
                <a href="events.php" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center">

          <?php
          while ($row = mysqli_fetch_array($res)) {

          ?>
            <!-- event -->
            <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
              <div class="card border-0 rounded-0 hover-shadow">
                <?php $id = $row['id'];
                ?>
                <a href="event.php?id=<?php echo $id ?>">
                  <div class="card-img position-relative">
                    <img class="card-img-top rounded-0" src="<?php echo $row['image']; ?>" alt="event thumb">
                    <?php $date =  substr($row['startDate'], 8, 2);
                    $month = substr($row['startDate'], 5, 2);
                    $monthName = date("F", mktime(0, 0, 0, $month, 10));

                    ?>
                    <div class="card-date"><span><?php echo $date; ?></span><br><?php echo $monthName; ?></div>
                  </div>
                  <div class="card-body">
                    <!-- location -->
                    <h4 class="card-title"><?php echo $row['name']; ?></h4>
                  </div>
                </a>
              </div>
            </div>




          <?php
          }
          ?>

        </div>
        <!-- mobile see all button -->
        <div class="row">
          <div class="col-12 text-center">
            <a href="events.php" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
          </div>
        </div>
      </div>
    </section>

<?php
  }
}
?>


<?php
include './footer.php';
?>