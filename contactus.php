<?php
$title = 'Contact Us';
$active = 'contact';
include './header.php';
include './config.php';
$message = false;
$showError = false;
$errorMessage = '';

?>



<!-- page title -->
<section class="page-title-section overlay norepeat" style="background-image: url(images/backgrounds/contact-bg.png)">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item h2 text-primary font-secondary">Contact Us</a>
          </li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Fill this Contact form if you have any questions or queries. Our support team is
          always
          here to get back to you.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->
<section class="section bg-gray">
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    if ($name != '' && $email != '' && $subject != '' && $message != '') {
      $sql = "INSERT INTO `contactus` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
      $res = mysqli_query($conn, $sql);
      if (!$res) {
        $showError = true;
        $errorMessage = 'Try Again Later';
      } else {
        header("location:contactus.php");
      }
    }
  }
  ?>


  <!-- contact -->

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Contact Us</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
          <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name" required>
          <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Your Email" required>
          <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject" required>
          <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message" required></textarea>
          <button type="submit" name="form_submitted" value="send" class="btn btn-primary">SEND MESSAGE</button>
        </form>
      </div>
      <div class="col-lg-6">
        <p class="mb-5">
        <div class="col-lg-12">
          <h3>Prof. Lakhveer Singh Khana</h3>
          <h5>Officer Incharge</h5>
          <a href="tel:+919464663313" class="text-color h5 d-block">+91 94646-63313</a>
          <a href="mailto:lakveerbathinda@gmail.com" class="mb-5 text-color h5 d-block">lakveerbathinda@gmail.com</a>
        </div>
        </p>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<?php
include './footer.php';
?>