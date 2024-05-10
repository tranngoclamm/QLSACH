<?php
require_once 'Model/UserModel.php';
require_once 'View/LoginView.php';

$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action === 'login') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userModel = new UserModel();
    $loggedIn = $userModel->login($username, $password);

    if ($loggedIn) {
        // Chuyển hướng đến trang hiển thị sách sau khi đăng nhập thành công
        echo "Đăng nhập thành công!";
        exit();
    } else {
        // Hiển thị lại form đăng nhập nếu đăng nhập không thành công
        $loginView = new LoginView();
        $loginView->showLogin();
    }
} else {
    // Hiển thị form đăng nhập ban đầu
    $loginView = new LoginView();
    $loginView->showLogin();
}
?>