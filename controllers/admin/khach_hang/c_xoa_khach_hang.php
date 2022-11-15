<?php 
 if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    delete_khachhang($_GET['id']);
}
$listkhachhang = loadall_khachhang();
include "../../views/admin/khach_hang/v_danh_sach_khach_hang.php";
?>