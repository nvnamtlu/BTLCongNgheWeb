<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php'); 

if(isset($_GET['id'])) {
    $post = selectOne('posts', ['id' => $_GET['id']]);
}

$posts = selectAll('posts', ['published' => 1]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $post['title']; ?> | CNTT-TLU</title>
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
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v8.0" nonce="ULgLaWwD"></script>

    <?php include("app/includes/header.php");?>
    <!--Page Wrapper-->
    <div class="page-wrapper">
        
        <!--Conten-->
    <div class="content clearfix">
            <!--Main content-->
        <div class="main-content single">
            <h1 class="post-title"><?php echo $post['title']; ?></h1>

            <div class="post-content">
                <?php echo html_entity_decode($post['body']); ?>
            </div>
        </div>
            
            <!--// Main content-->

            <!--Sidebar-->
            <div class="sidebar single">
                <div class="fb-page" data-href="https://www.facebook.com/cse.tlu.edu.vn" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/cse.tlu.edu.vn" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/cse.tlu.edu.vn">Khoa Công nghệ thông tin- Đại học Thủy lợi</a></blockquote></div>
                <div class="section popular">
                    <h2 class="section-title">Phổ biến</h2>

                    <?php foreach($posts as $p): ?>
                        <div class="post clearfix">
                            <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                            <a href="" class="title">
                                <h4><?php echo $p['title'] ?></h4>
                            </a>
                        </div>
                    <?php endforeach; ?>



                </div>
            </div>
            <!--//Sidebar-->
        </div>

    </div>
    <!--//Page Wrapper-->

    <?php include(ROOT_PATH . "/app/includes/footer.php");?>

    <!--jQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Slick Carousel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--Custom Script-->
    <script src="assets/js/scripts.js"></script>
</body>
</html>