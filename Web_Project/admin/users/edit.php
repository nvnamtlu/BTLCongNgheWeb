<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin người dùng</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <!--Custom Styling-->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!--Admin Styling-->
    <link rel="stylesheet" href="../../assets/css/admin.css">
</head>
<body>
    <!--Facebook Page  Plugin SDK-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="5hLQAPhL"></script>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    <!--Admin Page Wrapper-->
    <div class="admin-wrapper">

    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>

        <!--Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="index.php" class="btn btn-big">Quản lý người dùng</a>
            </div>   

            <div class="content">

                <h2 class="page-title">Sửa thông tin người dùng</h2>

                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                
                <form action="edit.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div>
                        <label for="username">Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                    </div>
                    <div>
                        <label for="passwordConf">Password Confirmation</label>
                        <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
                    </div>
                    <div>
                        <?php if(isset($admin) && $admin == 1): ?>
                            <label>
                                <input type="checkbox" name="admin" checked>
                                Admin
                            </label>
                        <?php else: ?>
                            <label>
                            <input type="checkbox" name="admin">
                            Admin
                        </label>
                        <?php endif; ?>


                    </div>
                    <div>
                        <button type="submit" name="update-user" class="btn btn-big">Cập nhật</button>
                    </div>
                </form>
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
    <script src="../../assets/js/scripts.js"></script>

</body>
</html>