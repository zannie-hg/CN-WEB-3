<!DOCTYPE html>
<html>

<head>
    <title>PHÁT SINH MẢNG VÀ TÍNH TOÁN</title>
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
    function xuat_mang($mang)
    {
        echo implode(', ', $mang);
    }

    function tim_max($mang)
    {
        $max = max($mang);
        echo $max;
    }

    function tim_min($mang)
    {
        $min = min($mang);
        echo $min;
    }

    function tinh_tong($mang)
    {
        $tong = array_sum($mang);
        echo $tong;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $so_phan_tu = isset($_POST['so_phan_tu']) ? $_POST['so_phan_tu'] : 0;
        $mang_so = array();

        // Phát sinh mảng ngẫu nhiên
        for ($i = 0; $i < $so_phan_tu; $i++) {
            $mang_so[] = rand(1, 100); // Số ngẫu nhiên từ 1 đến 100
        }
    }
    ?>
    <form action="mang-2.php" method="POST">

        <table>
            <thead>
                <tr>
                    <th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nhập số phần tử:</td>
                    <td><input type="text" name="so_phan_tu" width="100%"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Phát sinh và tính toán"></td>
                </tr>
                <tr>
                    <td>Mảng: </td>
                    <td><input type="text" name="mang_so" disabled="disabled" value="<?php xuat_mang($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td>GTLN ( MAX ) trong mảng: </td>
                    <td><input type="text" name="gtln" disabled="disabled" value="<?php tim_max($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td>GTNN ( MIN ) trong mảng: </td>
                    <td><input type="text" name="ttnn" disabled="disabled" value="<?php tim_min($mang_so); ?>"></td>
                </tr>
                <tr>
                    <td>Tổng mảng: </td>
                    <td><input type="text" name="tong" disabled="disabled" value="<?php tinh_tong($mang_so); ?>"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>