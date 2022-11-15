<?php
    function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm)
    {
        $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }
?>