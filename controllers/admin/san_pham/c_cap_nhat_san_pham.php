<?php
if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
    $id = $_POST['id'];
    $iddm = $_POST['iddm'];
    $tensp = $_POST['tensp'];
    $giasp = $_POST['giasp'];
    $motangansp = $_POST['motangansp'];
    $motachitietsp = $_POST['motachitietsp'];
    $hinh = $_FILES['anhsp']['name'];
    $target_dir = "../../assets/uploads/";
    $target_file = $target_dir . basename($_FILES['anhsp']['name']);
    move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file);

    update_sanpham($id, $tensp, $giasp, $motangansp, $motachitietsp, $hinh, $iddm);

    echo '<script>alert("Cập nhật sản phẩm thành công!")</script>';
}
$listdanhmuc = loadall_danhmuc();
$listsanpham = loadall_sanpham();
include "../../views/admin/san_pham/v_danh_sach_san_pham.php";
