<header>
        <a href="<?php echo BASE_URL . '/index.php' ?>"><img src="assets/images/logo.jpg" alt="logo"/></a>
        <a href="<?php echo BASE_URL . '/index.php' ?>" class="logo">
            <h1 class="logo-text">Khoa <span>CNTT</span>-TLU</h1>
        </a>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="<?php echo BASE_URL . '/index.php' ?>">Trang chủ</a></li>
            <li>
                <a href="#">Giới thiệu</a>
                <ul style="left: 0px">
                    <li><a href="#">Giới thiệu chung</a></li>
                    <li><a href="#">Chương trình đào tạo</a></li>
                    <li><a href="#">Giảng viên</a></li>
                    <li><a href="#">Cơ sở vật chất</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Tin tức</a>

            </li>
            <li>
                <a href="#">Thông báo</a>
            </li>
            <li>
                <a href="#">Tuyển sinh</a>
                <ul style="left: 0px">
                    <li><a href="#">Đề án tuyển sinh</a></li>
                    <li><a href="#">Tư vấn tuyển sinh</a></li>
                    <li><a href="<?php echo BASE_URL . '/profile.php' ?>" target="_blank">Nộp hồ sơ online</a></li>

                </ul>
            </li>

            <?php if(isset($_SESSION['id'])) : ?>
                <li>
                    <a href="#">
                    <i class="fa fa-user"></i>
                    <?php echo $_SESSION['username']; ?>
                    <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                    </a>
                    <ul style="left: 0px">
                         <?php if($_SESSION['admin']): ?>
                            <li><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Quản trị</a></li>
                         <?php endif; ?>      
                        <li><a href="<?php echo BASE_URL . '/logout.php' ?>" class = "logout">Đăng xuất</a></li>
                    </ul>
                </li>
            <?php else: ?>
                <li><a href="<?php echo BASE_URL . '/register.php' ?>">Đăng ký</a></li>
                <li><a href="<?php echo BASE_URL . '/login.php' ?>">Đăng nhập</a></li>
            <?php endif; ?>
        </ul>
    </header>