<?php
function insert_binhluan($noi_dung, $id_nd, $id_sp, $ngay_bl)
{
    $sql = "insert into binh_luan(noi_dung,id_nd,id_sp,ngay_bl) values('$noi_dung','$id_nd','$id_sp','$ngay_bl')";
    pdo_execute($sql);
}

function loadall_binhluan($id_sp)
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
