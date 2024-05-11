<?php
require_once '../Model/BookModel.php';

class SachController {
    public function displayBooks() {
        $bookModel = new BookModel();
        $books = $bookModel->getFirstFiveBooks();

        require_once '../View/Sach.php';
    }
}

// Hiển thị thông tin sách
$sachController = new SachController();
$sachController->displayBooks();
?>