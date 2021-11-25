<?php include("path.php")?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
guestsOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <!--Custom Styling-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!--Facebook Page  Plugin SDK-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="5hLQAPhL"></script>

    <?php include(ROOT_PATH . "/app/includes/header.php");?>

    <div class="auth-content">
        <form action="login.php" method="post">
            <h2 class="form-title">Đăng nhập</h2>

            <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

            <div>
                <label for="username">Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
            </div>
            <div>
                <button type="submit" name="login-btn" class="btn btn-big">Đăng nhập</button>
            </div>
            <p>Hoặc <a href="<?php echo BASE_URL . '/register.php' ?>">Đăng ký</p>
        </form>
    </div>

    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    
    <!--Custom Script-->
    <script src="assets/js/scripts.js"></script>

</body>
</html>