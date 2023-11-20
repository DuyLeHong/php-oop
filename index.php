<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        include 'sanpham.php';
        include 'model/nhanvien.php';

        $arrSanphams = array();
        $sp1 = new SanPham('sp 1', 500, 'https://icdn.dantri.com.vn/thumb_w/640/2021/03/09/fpt-polytechnic-nhan-rong-mo-hinh-pho-thong-cao-dang-tren-toan-quocdocx-1615246307598.png');

        $sp2 = new SanPham('sp 2', 600, 'https://vcdn-vnexpress.vnecdn.net/2022/11/25/image001-1272-1669360405.jpg');

        array_push($arrSanphams, $sp1);
        array_push($arrSanphams, $sp2);

        foreach ($arrSanphams as $sanpham) {
            echo '<div>'.$sanpham->name .' - gia: '. $sanpham->price;

            echo "<img width='200' height='200' src='". $sanpham->urlImage ."' </img>";

            echo "</div>";
            echo '<br>';
        }
    ?>
    
</body>
</html>