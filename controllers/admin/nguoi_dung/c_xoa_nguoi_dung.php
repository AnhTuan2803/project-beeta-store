<?php 
 if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    delete_nguoidung($_GET['id']);
}
$listnguoidung = loadall_nguoidung();
include "../../views/admin/nguoi_dung/v_danh_sach_nguoi_dung.php";
?>