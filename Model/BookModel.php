<?php
require_once 'config.php';

class BookModel  {
    public function getFirstFiveBooks() {
        global $db;

        try {
            // Lấy 5 dòng đầu tiên trong bảng "sách"
            $query = "SELECT * FROM Sach LIMIT 5";
            $statement = $db->prepare($query);
            $statement->execute();

            $result = $statement->fetchAll();

            return $result;
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            exit();
        }
    }
}
?>
