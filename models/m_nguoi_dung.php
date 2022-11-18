<?php
 function loadone_taikhoan($id){
    $sql = "select * from nguoi_dung where id_nd=" . $id;
     $dm = pdo_query_one($sql);
     return $dm;
}


function loadall_taikhoan()
{
    $sql = "select * from nguoi_dung order by id_nd desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function insert_taikhoan($name,$user, $pass, $email,$date)
{
    $sql = "insert into nguoi_dung(ho_ten,ten_dang_nhap,mat_khau,email,ngay_dang_ky) values('$name','$user','$pass','$email','$date')";
    pdo_execute($sql);
}

function delete_taikhoan($id){
    $sql = "delete from nguoi_dung where id_nd=" . $id;
    pdo_execute($sql);
}

function check_email($email)
{
    $sql = "select * from taikhoan where email='" . $email . "'";
    $kq = pdo_query_one($sql);
    return $kq;
}

function checkuser($user, $pass)
{
    $sql = "select * from nguoi_dung where (email='" . $user . "') OR (ten_dang_nhap='" . $user . "') AND mat_khau='" . $pass . "'";
    $kq = pdo_query_one($sql);
    return $kq;
}

function update_taikhoan($id,$vai_tro, $ho_ten, $ten_dang_nhap, $mat_khau, $email)
{
    $sql = "update nguoi_dung set id_vai_tro='" . $vai_tro . "', ho_ten='" . $ho_ten . "', ten_dang_nhap='" . $ten_dang_nhap . "',mat_khau='" . $mat_khau . "',email='" . $email . "' where id_nd=" . $id;
    pdo_execute($sql);
}

// Vai trò
function loadall_vaitro()
{
    $sql = "select * from vai_tro order by id_vai_tro desc";
    $listvaitro = pdo_query($sql);
    return $listvaitro;
}