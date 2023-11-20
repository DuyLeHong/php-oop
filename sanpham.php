<?php
class SanPham
{

    public $name;
    public $price;
    public $urlImage;

    public function __construct($_name, $_price, $_urlImage)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->urlImage = $_urlImage;
    }

    public function hienthiThongtin()
    {
        return 'Tên SP: ' . $this->name . ', Giá: ' . $this->price . ', Link ảnh: ' . $this->urlImage;
    }

    public function displayInfo()
    {
        echo '<div>' . $this->name . ' - gia: ' . $this->price;

        echo "<img width='200' height='200' src='" . $this->urlImage . "' </img>";

        echo "</div>";
        echo '<br>';
    }
}

?>

<?php

$arrSanphams = array();
$sp1 = new SanPham('sp 1', 500, 'https://icdn.dantri.com.vn/thumb_w/640/2021/03/09/fpt-polytechnic-nhan-rong-mo-hinh-pho-thong-cao-dang-tren-toan-quocdocx-1615246307598.png');

$sp2 = new SanPham('sp 2', 600, 'https://vcdn-vnexpress.vnecdn.net/2022/11/25/image001-1272-1669360405.jpg');

array_push($arrSanphams, $sp1);
array_push($arrSanphams, $sp2);

return $arrSanphams;
?>