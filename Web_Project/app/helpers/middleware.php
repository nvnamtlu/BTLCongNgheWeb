<?php 

function usersOnly($redirect = '/index.php')
{
    if (empty($_SESSION['id'])){
        $_SESSION['message'] = 'Bạn cần đăng nhập';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function adminOnly($redirect = '/index.php')
{
    if (empty($_SESSION['id']) || empty($_SESSION['admin'])){
        $_SESSION['message'] = 'Bạn không được ủy quyền';
        $_SESSION['type'] = 'error';
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}

function guestsOnly($redirect = '/index.php')
{
    if (isset($_SESSION['id'])){
        header('location: ' . BASE_URL . $redirect);
        exit(0);
    }
}