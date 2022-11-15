<?php
     function loadall_khachhang(){
        $sql = "select * from khach_hang order by id_kh desc";
            $listkhachhang = pdo_query($sql);
        return $listkhachhang;
    }
?>