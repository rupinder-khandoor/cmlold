<?php
$title = 'About Us';
$active = 'about';
include './header.php';
include './config.php';
?>

<section class="page-title-section overlay norepeat" style="background-image: url(images/backgrounds/about-bg.png)">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="list-inline custom-breadcrumb">
                    <li class="list-inline-item h2 text-primary font-secondary">About CML</a></li>
                    <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
                </ul>
                <p class="text-lighten">Providing a platform for the holistic development and grooming the overall personality
                    of
                    students with resources and opportunities that will help in building a
                    successful career.</p>
            </div>
        </div>
    </div>
</section>
<!-- /page title -->
<!-- principle desk -->

<section class="section">
    <div class="container">
        <h2 class="section-title">Principal Desk</h2>
        <div class="row align-items-start">
            <div class="col-md-7 order-2 order-md-1">
                <div class="about-us-content">
                    <p>Guru Nanak Dev Engineering college, Ludhiana is taking an initiative for the students by the students in
                        the form of Center for Multi-Faceted Learning. Not only the participants but the organizers and managers
                        are also students working incessantly and persistently for their blooming.</p>

                    <p>Center for Multi-Faceted Learning is the first ever center made in Guru Nanak Dev Engineering College,
                        that not only organizes various events but also is a ground spot for the students' learning.  Each student
                        in CML plays a pivotal role for the development.</p>

                    <p>In the days to come it will act as a game changer for the institution by helping the students in personal
                        and professional environment.  I wish you a very happy and academically rewarding student life, and I hope
                        this center equips you with everything you need to achieve excellence.</p>
                    </p>
                </div>
            </div>
            <div class="col-md-4 order-1 col-xs-12 order-md-2 mb-4 mb-md-0 offset-md-1 ">
                <img class="img-fluid w-100" style="border-radius: 10px; box-shadow: 0px 0px 15px 3px #7f93c0;" src="images/about/Dr-Sehijpal-Singh.jpg" alt="Dr Sehijpal Singh">
                <h2 style=" font-size: 1.9rem; text-align: center; margin-top: 6px;">Dr. Sehijpal Singh</h2>
            </div>
        </div>
    </div>
</section>


<!-- /principle desk -->

<!-- about -->
<section class="section">
    <div class="container">
        <div class="row">
            <class class="col-12">
                <!-- <img class="img-fluid w-100 my-3" src="/images/about/about-us.png" alt="about image"> -->
                <h2 class="section-title">Center For Multi-Faceted Learning</h2>
                <div class="text-dark about-us-content">
                    <p>
                        Center for Multi-Faceted Learning is a hub for ethical and general purpose knowledge in
                        terms
                        of education, morality and humility. The concept of this program is to utilize all the capabilities of the
                        students to negotiate and clinch top quality communication skills, problem solving skills, and develop
                        distinctive personality. This absolutely helps students to identify their field of interests. A lot of
                        activities under this updated society surely helps the students to explore and have broader view of their
                        selective fields. In addition to this, the center also encourages students to enrol in MOOCs and indulge
                        in self learning which will lead to an incremental knowledge and development of interest in
                        different fields. Being a part of this club, an individual can primarily build not only his/her personal
                        individualization, but also enrich their mind-set with optimistic thoughts, constructive behaviour and
                        confidence.</p>
                </div>
                <div class="text-dark about-us-content">
                    <p>In our college, the societies and cells have a crucial role. Some are technical while others are
                        creative
                        skill based, each organizing events on a regular basis and also arranging webinars with highly qualified
                        speakers.</p>
                </div>
                <div class="text-dark about-us-content">
                    <p>Center for Multi-Faceted Learning continuously brings best opportunities to its members as well as
                        students by providing a lot of
                        dynamic
                        projects, webinars by the professionals and events. As stated, it is a center for multi-faceted learning
                        which provides development, interpersonal skills, self-grooming opportunities and aims at developing
                        ethical expertise. The students are also benefited with the interactive sessions on entrepreneurship in
                        collaboration with STEP. Secondly, it provides sufficient training for competitive examinations and help
                        them understand their field of interest. Thirdly, organizing such kind of activities creates a purposeful,
                        confident and discrete life for the graduates. It not only aims at providing technical career training
                        i.e.
                        Gate and P.S.U., but also provides guidance for the government exams like UPSC and capsule courses for
                        joining armed forces. In addition, it is duly updated with the upcoming technological and career
                        advancements for the upcoming generations.</p>
                </div>
                <h2 class="section-title my-3">MISSION & VISION</h2>
                <div class="text-dark about-us-content">
                    <p>Center for Multi-Faceted Learning aims at promoting the holistic development of students. The focus of
                        this
                        center is to hone the communication, interpersonal and problem-solving skills and further
                        develop
                        the overall personality of students. Guiding students towards building a successful career by identifying
                        their fields of interest and providing them sufficient training for competitive examinations is one of the
                        targeted tasks to be held under this center.</p>
                </div>
                <div class="text-dark about-us-content">
                    <p> Moreover, our center also aims to encourage students for enrolling in MOOCs and get involved in
                        self-learning. Conducting interactive sessions on entrepreneurship in collaboration with STEP is also one
                        of
                        the objectives of the center. By organizing such kinds of activities, this center would strive to prepare
                        the graduates to live a purposeful, confident and directed life.</p>
                </div>
                <h2>Key Objectives</h2>
                <div class="text-dark about-us-content">
                    <ul>
                        <li type="disc">
                            <p>E-Learning especially SWAYAM-NPTEL Online Courses.</p>
                        </li>
                        <li type="disc">
                            <p>Developing the students’ personality.</p>
                        </li>
                        <li type="disc">
                            <p>Personality Development Capsule Courses.</p>
                        </li>
                        <li type="disc">
                            <p>Entrepreneurship Capsule Courses (In association with STEP) Capsule Courses for joining
                                Armed Forces. </p>
                        </li>
                        <li type="disc">
                            <p>Regular Professional & Ethical Learning.</p>
                        </li>
                        <li type="disc">
                            <p>Preparation of competition like UPSC, GATE, CAT, GRE,
                                State Civil services examination </p>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
</section>
<!-- /about -->
<?php
$faculty = '0';
$event = '0';
$student = '0';
$sql = 'SELECT * FROM `countdata` ORDER BY `id` DESC LIMIT 1';
$res = mysqli_query($conn, $sql);
if (!$res) {
    $faculty = '0';
    $event = '0';
    $student = '0';
} else {
    if (mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
        $faculty = $row['faculty'];
        $event = $row['events'];
        $student = $row['students'];
    } else {
        $faculty = '0';
        $event = '0';
        $student = '0';
    }
}
?>
<!-- funfacts -->
<section class="section-sm bg-primary">
    <div class="container">
        <div class="row">
            <!-- funfacts item -->
            <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
                <div class="text-center">
                    <h2 class="count text-white" data-count="<?php echo $faculty; ?>">0</h2>
                    <h5 class="text-white">Faculty Member</h5>
                </div>
            </div>
            <!-- funfacts item -->
            <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
                <div class="text-center">
                    <h2 class="count text-white" data-count="<?php echo $event; ?>">0</h2>
                    <h5 class="text-white">Events</h5>
                </div>
            </div>
            <!-- funfacts item -->
            <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
                <div class="text-center">
                    <h2 class="count text-white" data-count="<?php echo $student; ?>">0</h2>
                    <h5 class="text-white">Active Students</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /funfacts -->
<?php
include './footer.php';
?>
