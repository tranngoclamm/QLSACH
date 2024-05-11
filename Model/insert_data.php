<?php
require_once 'config.php';

try {
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

    echo "Dữ liệu đã được chèn thành công!";
} catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}