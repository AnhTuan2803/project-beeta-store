<?php
// kiểm tra người dùng ấn vào add hay không
if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
  $iddm = $_POST['iddm'];
  $tensp = $_POST['tensp'];
  $giasp = $_POST['giasp'];
  $motangansp = $_POST['motangansp'];
  $motachitietsp = $_POST['motachitietsp'];
  $hinh = $_FILES['anhsp']['name'];
  $ngaytaosp = date('Y/m/d');
  $target_dir = "../../assets/uploads/";
  $target_file = $target_dir . basename($_FILES['anhsp']['name']);
  move_uploaded_file($_FILES["anhsp"]["tmp_name"], $target_file);

  insert_sanpham($tensp, $giasp, $motangansp, $motachitietsp, $hinh, $ngaytaosp, $iddm);
  // $thongbao = "Thêm thành công!";
  echo '<script>alert("Thêm sản phẩm thành công!")</script>';
}
$listdanhmuc = loadall_danhmuc();
include "../../views/admin/san_pham/v_them_san_pham.php";
