<?php
require_once 'config.php';

try {
    $db = new PDO($conn, $fields["user"], $fields["pass"]);

    // Tạo CSDL QUANLYSACH
    $query = "CREATE DATABASE QUANLYSACH";
    $db->exec($query);
    $db->exec("USE QUANLYSACH");

    // Tạo bảng Sach
    $query = "CREATE TABLE Sach (
        MaSach INT PRIMARY KEY,
        TenSach VARCHAR(255),
        SoLuong INT
    )";
    $db->exec($query);

    // Tạo bảng User
    $query = "CREATE TABLE User (
        MaUser INT PRIMARY KEY,
        TenUser VARCHAR(255),
        MatKhau VARCHAR(255)
    )";
    $db->exec($query);

    echo "Cơ sở dữ liệu đã được tạo thành công!";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}