<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <!--Custom Styling-->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!--Admin Styling-->
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    <!--Facebook Page  Plugin SDK-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="5hLQAPhL"></script>

    <header>
        <a href="<?php echo BASE_URL . '/index.php' ?>"><img src="../assets/images/logo.jpg" alt="logo"/></a>
        <a class="logo" href="<?php echo BASE_URL . '/index.php' ?>">
            <h1 class="logo-text">Khoa <span>CNTT</span>-TLU</h1>
        </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <?php if(isset($_SESSION['username'])): ?>
                <li>
                    <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username']; ?>
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                    </a>
                    <ul style="left: 0px">
                        <li><a href="<?php echo BASE_URL . '/logout.php'; ?>" class="logout">Đăng xuất</a></li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </header>
    <!--Admin Page Wrapper-->
    <div class="admin-wrapper">

    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

        <!--Admin Content-->
        <div class="admin-content">

            <div class="content">

                <h2 class="page-title">Quản trị viên</h2>

                <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

            
                <img src="../assets/images/trangtri1.png" alt="anhtrangtri" width="100%" height="auto"/>
            </div>
        </div>
        <!--//Admin Content-->

    </div>
    <!--//Page Wrapper-->

    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <!--Ckeditor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
    <!--Custom Script-->
    <script src="../assets/js/scripts.js"></script>

</body>
</html>