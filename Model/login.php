<?php
require_once 'config.php';

class UserModel {
    public function login($username, $password) {
        global $db;

        try {
            // Kiểm tra thông tin đăng nhập trong bảng User
            $query = "SELECT COUNT(*) FROM User WHERE TenUser = :username AND MatKhau = :password";
            $statement = $db->prepare($query);
            $statement->bindParam(':username', $username);
            $statement->bindParam(':password', $password);
            $statement->execute();

            $result = $statement->fetchColumn();

            if ($result > 0) {
                return true; // Đăng nhập thành công
            } else {
                return false; // Sai thông tin đăng nhập
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            exit();
        }
    }
}

?>