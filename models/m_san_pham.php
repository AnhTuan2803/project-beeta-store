<?php

function insert_sanpham($tensp, $giasp, $motasp, $hinh, $ngaytaosp, $iddm)
{
    $sql = "insert into san_pham(ten_sp,mo_ta,don_gia,hinh,ngay_tao,id_dm) values('$tensp','$motasp','$giasp','$hinh','$ngaytaosp','$iddm')";
    pdo_execute($sql);
}

function loadall_sanpham()
{
    $sql = "select * from san_pham order by id_sp desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_home()
{
    $sql = "select * from san_pham where 1 order by id_sp desc limit 10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_new()
{
    $sql = "select * from san_pham where 1 order by id_sp desc limit 5";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadone_sanpham($id)
{
    $sql = "select * from san_pham inner join danh_muc on san_pham.id_dm = danh_muc.id_dm where id_sp=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}

function delete_sanpham($id)
{
    $sql = "delete from san_pham where id_sp=" . $id;
    pdo_execute($sql);
}

function update_sanpham($id, $tensp, $giasp, $motasp, $hinh, $iddm)
{
    if ($hinh != "") {
        $sql = "update san_pham set id_dm='" . $iddm . "', ten_sp='" . $tensp . "',mo_ta='" . $motasp . "',don_gia='" . $giasp . "',hinh='" . $hinh . "'where id_sp=" . $id;
    } else {
        $sql = "update san_pham set id_dm='" . $iddm . "', ten_sp='" . $tensp . "',mo_ta='" . $motasp . "',don_gia='" . $giasp . "' where id_sp=" . $id;
    }
    pdo_execute($sql);
}

function load_sanpham_cungloai($id_sp, $id_dm)
{
    $sql = "select * from san_pham where id_dm=" . $id_dm . " AND id_sp <>" . $id_sp;
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
