<!DOCTYPE html>
<html>

<head>
    <title>Nhập và tính toán trên dãy số</title>
    <meta charset="utf-8">
    <style>
        * {
            font-family: Tahoma;
        }

        table {
            width: 400px;
            margin: 100px auto;
        }

        table th {
            background: #66CCFF;
            padding: 10px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <?php
    // Xử lý phép toán logic bằng php
    $ket_qua = "";
    if (isset($_POST['btn_goi'])) {
        $nhap_mang = $_POST['nhap_mang'];
        // Tách chuỗi thành một mảng các số
        $mang = explode(',', $nhap_mang);
        // Tính tổng dãy số
        $ket_qua = array_sum($mang);
    }
    ?>
    <form method="POST" action="mang-1.php">
        <table>
            <thead>
                <tr>
                    <th colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nhập dãy số:</td>
                    <td><input type="text" name="nhap_mang" value="<?php echo isset($_POST['nhap_mang']) ? $_POST['nhap_mang'] : ''; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="btn_goi" value="Tổng dãy số"></td>
                </tr>
                <tr>
                    <td>Tổng dãy số:</td>
                    <td><input type="text" name="ket_qua" disabled="disabled" value="<?php echo $ket_qua; ?>"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>
