<?php
     function loadall_khachhang(){
        $sql = "select * from khach_hang order by id_kh desc";
            $listkhachhang = pdo_query($sql);
        return $listkhachhang;
    }

     function delete_khachhang($id){
        $sql = "delete from khach_hang where id_kh=" . $id;
        pdo_execute($sql);
    }

    function loadone_khachhang($id){
        $sql = "select * from khach_hang where id_kh=" . $id;
         $kh = pdo_query_one($sql);
         return $kh;
    }

    function update_khachhang($id, $tenkh, $emailkh, $gioitinhkh, $ngaysinhkh, $diachikh, $sdtkh, $ghichukh){
        $sql = "update khach_hang set ten_kh='" . $tenkh . "',gioi_tinh='" . $gioitinhkh . "',ngay_sinh='" . $ngaysinhkh . "',dia_chi='" . $diachikh . "',sdt='" . $sdtkh . "',ghi_chu='" . $ghichukh . "',email='" . $emailkh . "' where id_kh=" . $id;
        pdo_execute($sql);
    }
?>