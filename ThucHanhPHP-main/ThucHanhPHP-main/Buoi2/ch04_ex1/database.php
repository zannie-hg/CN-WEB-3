<!-- Kết nối cơ sở dữ liệu -->
<?php
$dsn = 'mysql:host=localhost;dbname=myguitarshop';
$username = 'root';
$password = '';
// Dùng try catch để bắt lỗi
try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('database_error.php');
    exit();
}
?>