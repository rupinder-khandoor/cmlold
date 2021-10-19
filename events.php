<?php
$title = 'Events';
$active = 'event';
include './header.php';
require_once './config.php'
?>


<!-- page title -->
<section class="page-title-section overlay norepeat" style="background-image: url(images/backgrounds/event-bg.png)">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb">
                    <li class="list-inline-item h2 text-primary font-secondary">Events</li>
                    <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                </ul>
                <p class="text-lighten">Center for Multi-Faceted Learning keeps on conducting such events throughout
                    the session which will help you enhance your knowledge, interpersonal skills and grow even more.</p>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->

<section class="section">
    <div class="container">
        <div class="row image-center">
            <!-- event -->
            <?php
            $sql = "SELECT `id`, `name`, `about`, `image`, `startDate` FROM `eventdata` ORDER BY `id` DESC";
            $res = mysqli_query($conn, $sql);
            if (!$res) {
            ?><h1>Try again Later</h1><?php
                                    } else {
                                        if (mysqli_num_rows($res) <= 0) {
                                        ?><h1>No Events</h1><?php
                                                            } else {
                                                                while ($row = mysqli_fetch_assoc($res)) {
                                                                ?>
                        <div class="col-lg-4 col-sm-6 mb-5">
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
                                                            }
                                                        }
            ?>
        </div>
    </div>
</section>

<?php
include './footer.php';
?>
