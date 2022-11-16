<?php
function insert_sanpham($ten_sp, $mo_ta_ngan, $don_gia, $hinh, $ngay_tao){
    $sql = "INSERT INTO `san_pham` (`ten_sp`, `mo_ta_ngan`, `don_gia`, `hinh`, `ngay_tao`) VALUES ('{$ten_sp}', '{$mo_ta_ngan}', '{$don_gia}', '{$hinh}', '{$ngay_tao}')";
    pdo_execute($sql);
}

    function loadall_sanpham(){
        $sql = "select * from `san_pham` order by id_sp desc ";
            $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function delete_sanpham($id){
        $sql = "delete from `san_pham` where id_sp=" . $id;
        pdo_execute($sql);
    }
    function loadone_sanpham($id_sp){
        $sql = "SELECT * FROM `san_pham` WHERE id_sp=".$id_sp;
        $san_pham = pdo_query_one($sql);
        return $san_pham;
    }
    function update_sanpham($id_sp, $ten_sp,$mo_ta_ngan, $mo_ta_chi_tiet, $don_gia, $hinh, $ngay_tao){
        if($hinh!=""){
            $sql = "UPDATE `san_pham` SET `ten_sp` = '$ten_sp',`mo_ta_ngan` = '$mo_ta_ngan', `mo_ta_chi_tiet` = '$mo_ta_chi_tiet' , `don_gia` = '$don_gia',`hinh` = '$hinh', `ngay_tao` = '$ngay_tao' WHERE `san_pham`.`id_sp` = $id_sp";
        }else
            $sql = "UPDATE `san_pham` SET `ten_sp` = '$ten_sp',`mo_ta_ngan` = '$mo_ta_ngan', `mo_ta_chi_tiet` = '$mo_ta_chi_tiet' , `don_gia` = '$don_gia', `ngay_tao` = '$ngay_tao' WHERE `san_pham`.`id_sp` = $id_sp";
        pdo_execute($sql);
    }
?>