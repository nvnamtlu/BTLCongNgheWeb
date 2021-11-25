<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý bài viết</title>
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
                <a href="create.php" class="btn btn-big">Thêm bài viết</a>
            </div>   

            <div class="content">

                <h2 class="page-title">Quản lý bài viết</h2>
                
                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>               

                <table>
                    <thead>
                        <th>STT</th>
                        <th>Tiêu đề</th>
                        <th>Tác giả</th>
                        <th colspan="3">Hành động</th>
                    </thead>
                    <tbody>

                        <?php foreach ($posts as $key => $post): ?>
                            <tr>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php echo $post['title'] ?></td>
                                <td>Admin</td>
                                <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit"><i class="fas fa-edit"></a></td>
                                <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');"><i class="fas fa-trash-alt"></i></a></td>
                                

                                <?php if($post['published']): ?>
                                    <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish"><i class="fas fa-lock-open"></i></a></td>
                                <?php else: ?>
                                    <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish"><i class="fas fa-lock"></i></a></td>
                                <?php endif; ?>

                            </tr>
                        <?php endforeach; ?>



                    </tbody>
                </table>
            </div>
        </div>
        <!--//Admin Content-->

    </div>
    <!--//Page Wrapper-->

    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <!--Custom Script-->
    <script src="../../assets/js/scripts.js"></script>

</body>
</html>