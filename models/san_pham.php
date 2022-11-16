<?php
<<<<<<< HEAD
function insert_sanpham($tensp, $giasp, $motangansp, $motachitietsp, $hinh, $ngaytaosp, $iddm)
{
    $sql = "insert into san_pham(ten_sp,mo_ta_ngan,mo_ta_chi_tiet,don_gia,hinh,ngay_tao,id_dm) values('$tensp','$motangansp','$motachitietsp','$giasp','$hinh','$ngaytaosp','$iddm')";
    pdo_execute($sql);
}

function loadall_sanpham()
{
    $sql = "select * from san_pham order by id_sp desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id)
{
    $sql = "select * from san_pham where id_sp=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function delete_sanpham($id)
{
    $sql = "delete from san_pham where id_sp=" . $id;
    pdo_execute($sql);
}

function update_sanpham($id, $tensp, $giasp, $motangansp, $motachitietsp, $hinh, $iddm)
{
    if ($hinh != "") {
        $sql = "update san_pham set id_dm='" . $iddm . "', ten_sp='" . $tensp . "',mo_ta_ngan='" . $motangansp . "',mo_ta_chi_tiet='" . $motachitietsp . "',don_gia='" . $giasp . "',hinh='" . $hinh . "'where id_sp=" . $id;
    } else {
        $sql = "update san_pham set id_dm='" . $iddm . "', ten_sp='" . $tensp . "',mo_ta_ngan='" . $motangansp . "',mo_ta_chi_tiet='" . $motachitietsp . "',don_gia='" . $giasp . "' where id_sp=" . $id;
    }
    pdo_execute($sql);
}
=======
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
>>>>>>> 70f021ea03958174a64b4451a29f3d49f27e0852
