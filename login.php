<?php
$title = "admin-login";
$active = '';
include 'header.php';
require 'config.php';
?>

<?php
session_start();

if (isset($_SESSION['loggedin'])) {
    header("location: admin/admin.php");
    exit;
}


$login = false;
$showError = false;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admins WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 1) {
        if (password_verify($password, $row['password'])) {
            $login = true;
            $_SESSION['loggedin'] = true;
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['role'] = $row['role'];
            header("Location: admin/admin.php");
        }
    }

    if (!$login) {
        $showError = true;
    }
}


?>

<section class="hero-section overlay bg-cover" data-background="/images/about/aboutcml.png">
    <div class="container">
        <!-- admin login -->
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Admin-Login</h3>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                            <div class="mb-3">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>

                <?php
                if ($login) {
                    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
                }
                if ($showError) {
                    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Incorrect username or password</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div> ';
                }
                ?>
            </div>
        </div>
    </div>
</section>





<?php
include 'footer.php'
?>