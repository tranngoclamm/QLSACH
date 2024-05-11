<?php
require_once '../Model/UserModel.php';

class LoginController {
    public function checkLogin() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = new UserModel();
        $loggedIn = $userModel->login($username, $password);

        if ($loggedIn) {
            // Redirect đến trang hiển thị sách
            header("Location: SachController.php");
        } else {
            echo "Sai thông tin đăng nhập!";
        }
    }
}

// Kiểm tra phương thức POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginController = new LoginController();
    $loginController->checkLogin();
}
?>