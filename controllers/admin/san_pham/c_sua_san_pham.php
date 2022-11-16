<?php 
 if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    $sp = loadone_sanpham($_GET['id']);
}
$listdanhmuc = loadall_danhmuc();
include "../../views/admin/san_pham/v_sua_san_pham.php";
?>