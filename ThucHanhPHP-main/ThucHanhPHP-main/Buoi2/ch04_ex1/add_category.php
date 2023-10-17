<?php 
// Lấy data danh mục các loại sản phẩm
$name = filter_input(INPUT_POST, 'name');

// Trói buộc đầu vào
if ($name == null) {
    $error = "Invalid category data. Try again";
    include('error.php');
} else {
    require_once('database.php');

    // Thêm sản phẩm vào cơ sở dữ liệu
    $query = 'INSERT INTO categories (categoryName)
              VALUES (:category_name)';
    $statement = $db->prepare($query);
    $statement->bindValue(':category_name', $name);
    $statement->execute();
    $statement->closeCursor();

    // navigate tới tệp category list
    include('category_list.php');
}
