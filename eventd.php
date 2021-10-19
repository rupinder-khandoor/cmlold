<?php
require './config.php'
?>

<div class="container">
    <div class="block-content">
        <div class="js-view-dom-id-5fb8ab8ce141f91876e2ec949056c089fe6c784e4535e11b72760f4323705051">
            <div class="views-view-grid horizontal cols-3 clearfix">
                <?php
                $events = array();
                $sql = "SELECT `id`, `name`, `about`, `image`, `startDate` FROM `eventdata` ORDER BY `id` DESC";
                $res = mysqli_query($conn, $sql);
                // print_r($res);
                if (!$res) {
                ?><h1>Try again Later</h1><?php
                                        } else {
                                            if (mysqli_num_rows($res) <= 0) {
                                            ?><h1>No Events</h1><?php
                                                            } else {
                                                                while ($row = mysqli_fetch_assoc($res)) {
                                                                    array_push($events, $row);
                                                                }
                                                            }
                                                        }
                                                                ?>

                <?php

                $i = 0;
                // return;
                while ($i < count($events)) {
                ?>
                    <div class="items" style="border: 1px solid red">
                        <?php for ($j = 0; $j < 3; $j++) {
                        ?>
                            <div>
                                <div class="views-field views-field-field-image">
                                    <div class="field-content"> <a href="/ruhi/blog/graphic-design-trends-2021" hreflang="en">
                                            <img src="<?php echo $events[$i]['image']; ?>" alt="image" typeof="foaf:Image" class="image-field" width="800" height="350"></a>
                                    </div>
                                </div>

                                <?php $date =  substr($events[$i]['startDate'], 8, 2);
                                $month = substr($events[$i]['startDate'], 5, 2);
                                $monthName = date("F", mktime(0, 0, 0, $month, 10));
                                $year = substr($events[$i]['startDate'], 0, 4);
                                ?>

                                <div class="views-field views-field-title"><span class="field-content"><a href="/ruhi/blog/graphic-design-trends-2021" hreflang="en"><?php echo $events[$i]['name']; ?></a></span></div>
                                <div class="views-field views-field-body">
                                    <div class="field-content">
                                        <p><?php echo $date . " " . $monthName . " " . $year; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                            if ($i == count($events) - 1) {
                                $i++;
                                break;
                            }
                            $i++;
                        }
                        ?>
                    </div>
                <?php
                if ($i == count($events)) {
                    break;
                }
                }
                ?>
            </div>
        </div>
    </div>
</div>