<?php 
    class SanPham {

        public $name;
        public $price;
        public $urlImage;

        public function __construct($_name, $_price, $_urlImage) {
            $this->name = $_name;
            $this->price = $_price;
            $this->urlImage = $_urlImage;
        }
    }
?>