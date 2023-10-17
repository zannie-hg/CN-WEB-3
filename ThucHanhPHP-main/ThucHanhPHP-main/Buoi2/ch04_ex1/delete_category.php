<?php
// Lấy ID của loại sản phẩm bằng cách dùng filter input
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

// Trói buộc inputs
if ($category_id == null or $category_id == false) {
    $error = "Invalid category ID.Try again";
    include('error.php');
} else {
    require_once('database.php');

    // Xóa sản phẩm vào database
    $query = 'DELETE FROM categories 
              WHERE categoryID = :category_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->execute();
    $statement->closeCursor();

    // Navigate tới file Category List 
    include('category_list.php');
}
