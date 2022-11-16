<<<<<<< HEAD
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
=======
<?php 
  // kiểm tra người dùng ấn vào add hay không
  if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
    $id_dm = $_POST['id_dm'];
    $ten_sp = $_POST['ten_sp'];
    $don_gia = $_POST['don_gia'];
    $ngay_tao = $_POST['ngay_tao'];
    $mo_ta_ngan = $_POST['mo_ta_ngan'];
    $hinh = $_FILES['hinh']['name'];
    $target_dir = "../../assets/upload/";
    $target_file = $target_dir . basename($_FILES['hinh']['name']);
    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);

      insert_sanpham($ten_sp, $mo_ta_ngan, $don_gia, $hinh, $ngay_tao);
    $thongbao = "Thêm thành công!";
>>>>>>> 70f021ea03958174a64b4451a29f3d49f27e0852
}
$listdanhmuc = loadall_danhmuc();
include "../../views/admin/san_pham/v_them_san_pham.php";
