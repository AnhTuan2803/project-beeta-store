<?php 
 if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    delete_hoadon($_GET['id']);
}
$listhoadon = loadall_hoadon();
include "../../views/admin/hoa_don/v_danh_sach_hoa_don.php";
?>