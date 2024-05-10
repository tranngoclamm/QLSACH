<?php

$uri = "mysql://avnadmin:AVNS_HxJ0KL7R6R9aGqhSh7n@mysql-6c78cd5-db25ts4.i.aivencloud.com:27943/defaultdb?ssl-mode=REQUIRED";

$fields = parse_url($uri);

// build the DSN including SSL settings
$conn = "mysql:";
$conn .= "host=" . $fields["host"];
$conn .= ";port=" . $fields["port"];
$conn .= ";dbname=defaultdb";
$conn .= ";sslmode=verify-ca;sslrootcert=ca.pem";

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

  // Chèn 5 bản ghi cho bảng Sach
  $query = "INSERT INTO Sach (MaSach, TenSach, SoLuong) VALUES
    (1, 'The Pragmatic Programmer', 10),
    (2, 'Productive Projects and Teams', 5),
    (3, 'The Clean Coder: A Code of Conduct for Professional Programmers', 3),
    (4, 'Code Complete: A Practical Handbook of Software Construction', 8),
    (5, 'The Mythical Man-month: Essays on Software Engineering', 2)";
  $db->exec($query);

  // Chèn 5 bản ghi cho bảng User
  $query = "INSERT INTO User (MaUser, TenUser, MatKhau) VALUES
    (1, 'lamtn', 'abc123'),
    (2, 'nguyenanh', 'abc!23@'),
    (3, 'tranvanchien', 'huyag'),
    (4, 'minhhoang', '34gf4'),
    (5, 'lanhoang', '5hadg')";
  $db->exec($query);

  echo "Dữ liệu đã được tạo thành công!";
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}
?>