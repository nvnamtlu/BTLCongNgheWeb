<?php
    include("path.php");
    include(ROOT_PATH . "/app/database/db.php");

    $posts = array();
    $postsTitle = 'Bài viết gần đây';
    

    if (isset($_POST['search-term'])) {
        $postsTitle = "Kết quả tìm kiếm cho '" . $_POST['search-term'] . "'";
        $posts = searchPosts($_POST['search-term']);
    }else{
        $posts = getPublishedPosts();
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khoa Công nghệ thông tin - Trường ĐH Thủy lợi</title>
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

    <?php include(ROOT_PATH . "/app/includes/messages.php");?>


    <!--Page Wrapper-->
    <div class="page-wrapper">
        <!--Post Slider-->
            <div class="post-slider">
                <h1 class="slider-title">Bài viết nổi bật</h1>
                <i class="fas fa-chevron-left prev"></i>
                <i class="fas fa-chevron-right next"></i>
                <div class="post-wrapper">


                    <?php foreach ($posts as $post): ?>
                        <div class="post">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="THE FACE TLU 2020" class="slider-image">
                            <div class="post-info">
                                <h4><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h4>
                                <i class="far fa-user"><?php echo $post['username']; ?></i>
                                &nbsp;
                                <i class="far fa-calendar"><?php echo date('F j, Y', strtotime($post['create_at'])); ?></i>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        <!--//Post Slider-->
        
        <!--Conten-->
    <div class="content clearfix">
            <!--Main content-->
        <div class="main-content">
            <h1 class="recent-post-title"><?php echo $postsTitle ?></h1>

            <?php foreach ($posts as $post): ?>
                <div class="post clearfix">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                    <div class="post-preview">
                        <h2><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
                        <i class="far fa-user"><?php echo $post['username']; ?></i>
                        &nbsp;
                        <i class="far calendar"><?php echo date('F j, Y', strtotime($post['create_at'])); ?></i>
                        <p class="preview-text">
                            <?php echo html_entity_decode(substr($post['body'], 0, 255) . '...'); ?>
                        </p>
                        <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">Chi tiết</a>
                    </div>
                </div>    
            <?php endforeach; ?>

        </div>
            
            <!--// Main content-->
            <div class="sidebar">
                <div class="section search">
                    <h2 class="section-title">Tìm kiếm</h2>
                    <form action="index.php" method="post">
                        <input type="text" name="search-term" class="text-input" placeholder="Bạn muốn tìm gì ?">
                    </form>
                </div>
                <div class="fb-page" data-href="https://www.facebook.com/cse.tlu.edu.vn/" data-tabs="messages" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cse.tlu.edu.vn/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cse.tlu.edu.vn/">Khoa Công nghệ thông tin- Đại học Thủy lợi</a></blockquote></div>
            </div>
        </div>

    </div>
    <!--//Page Wrapper-->

    <?php include(ROOT_PATH . "/app/includes/footer.php");?>
    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    
    <!--Slick Carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--Custom Script-->
    <script src="assets/js/scripts.js"></script>

</body>
</html>