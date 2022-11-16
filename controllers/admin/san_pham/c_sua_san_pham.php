<<<<<<< HEAD
<?php 
 if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    $sp = loadone_sanpham($_GET['id']);
}
$listdanhmuc = loadall_danhmuc();
=======
<?php
if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    $sp = loadone_sanpham($_GET['id']);
}
>>>>>>> 70f021ea03958174a64b4451a29f3d49f27e0852
include "../../views/admin/san_pham/v_sua_san_pham.php";
?>