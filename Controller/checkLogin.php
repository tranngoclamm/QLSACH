<?php
require_once '../Model/UserModel.php';

class LoginController {
    public function checkLogin() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = new UserModel();
        $loggedIn = $userModel->login($username, $password);

        if ($loggedIn) {

            // Sử dụng BookModel để lấy thông tin sách
            require_once '../Model/BookModel.php';
            $bookModel = new BookModel();
            $books = $bookModel->getFirstFiveBooks();
            require_once '../View/Sach.php';
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
