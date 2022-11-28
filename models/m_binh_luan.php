<?php

function insert_binhluan($noi_dung, $id_nd, $id_sp, $ngay_bl)
{
    $sql = "insert into binh_luan(noi_dung,id_nd,id_sp,ngay_bl) values('$noi_dung','$id_nd','$id_sp','$ngay_bl')";
    pdo_execute($sql);
}

function loadall_binhluan_client($id_sp)
{
    $sql = "select * from binh_luan inner join nguoi_dung on binh_luan.id_nd = nguoi_dung.id_nd where 1 ";
    if ($id_sp > 0) {
        $sql .= "AND id_sp='" . $id_sp . "'";
    } else {
        $sql .= "order by id_bl desc";
    }
    $listbl = pdo_query($sql);
    return $listbl;
}

function loadall_binhluan()
{
    if (isset($_GET['trang'])) {
        $page = $_GET['trang'];
    } else {
        $page = "";
    }
    if ($page == "" || $page == 1) {
        $begin = 0;
    } else {
        $begin = ($page * 5) - 5;
    }
    $sql = "select * from binh_luan order by id desc limit $begin,5";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function phantrang_bl()
{
    $sql = "select * from binh_luan order by id desc";
    $phantrang_bl = pdo_query($sql);
    return $phantrang_bl;
}
function delete_binhluan($id)
{
    $sql = "delete from `binh_luan` where id=" . $id;
    pdo_execute($sql);
}
