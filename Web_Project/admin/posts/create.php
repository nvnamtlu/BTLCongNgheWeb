<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm bài viết</title>
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
                <a href="index.php" class="btn btn-big">Quản lý bài viết</a>
            </div>   

            <div class="content">

                <h2 class="page-title">Thêm bài viết</h2>

                <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>

                <form action="create.php" method="post" enctype="multipart/form-data">
                    <div>
                        <label for>Tiêu đề</label>
                        <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                    </div>
                    <div>
                        <label>Body</label>
                        <textarea name="body" id="body"><?php echo $body ?></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div>
                        <?php if(empty($published)): ?>
                            <label>
                            <input type="checkbox" name="published">
                            Đăng bài
                            </label>
                        <?php else: ?>
                            <label>
                            <input type="checkbox" name="published" checked>
                            Đăng bài
                            </label>
                        <?php endif; ?>


                    </div>
                    <div>
                        <button type="submit" name="add-post" class="btn btn-big">Thêm bài viết</button>
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