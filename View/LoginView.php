<?php
class LoginView {
    public function showLogin() {
        // Hiển thị form đăng nhập
        echo '
        <h1>Đăng nhập</h1>
        <form action="../Controller/checkLogin.php" method="post">
            <input type="text" name="username" placeholder="Tên đăng nhập" required>
            <input type="password" name="password" placeholder="Mật khẩu" required>
            <button type="submit">Đăng nhập</button>
        </form>
        ';
    }
}
?>
