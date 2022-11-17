<?php 
 if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    $nd = loadone_nguoidung($_GET['id']);
}
$listnguoidung = loadall_nguoidung();
include "../../views/admin/nguoi_dung/v_sua_nguoi_dung.php";