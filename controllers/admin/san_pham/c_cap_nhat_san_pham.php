<?php
if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
    $id = $_POST['id'];
    $iddm = $_POST['id_dm'];
    $tensp = $_POST['tensp'];
    $giasp = $_POST['giasp'];
    $motasp = $_POST['motasp'];

    $hinh = $_FILES['anhsp']['name'];
    $target_dir = "../../assets/uploads/";
    $target_file = $target_dir . basename($_FILES['anhsp']['name']);
    move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file);

    update_sanpham($id, $tensp, $giasp, $motasp, $hinh, $iddm);

    echo '<script>alert("Cập nhật sản phẩm thành công!")</script>';
}
$listdanhmuc = loadall_danhmuc();
$listsanpham = loadall_sanpham();
include "../../views/admin/san_pham/v_danh_sach_san_pham.php";
