<?php
// Hiển thị thông tin sách
echo '<h1>Thông tin sách</h1>';
foreach ($books as $book) {
    echo 'Mã sách: ' . $book['MaSach'] . '<br>';
    echo 'Tên sách: ' . $book['TenSach'] . '<br>';
    echo 'Số lượng: ' . $book['SoLuong'] . '<br>';
    echo '------------------------<br>';
}
?>