<?php 
    $arrSanphams = include '../sanpham.php';

    echo $arrSanphams[0]->hienthiThongtin();

    echo '<br><br>';

    foreach ($arrSanphams as $sanpham) {
        echo $sanpham->displayInfo();
    }

?>