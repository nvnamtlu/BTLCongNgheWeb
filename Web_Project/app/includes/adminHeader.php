<header>
        <a href="<?php echo BASE_URL . '/index.php' ?>"><img src="../../assets/images/logo.jpg" alt="logo"/></a>
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