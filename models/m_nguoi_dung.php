<?php
function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}

function insert_taikhoan($name,$user, $pass, $email,$date)
{
    $sql = "insert into nguoi_dung(ho_ten,ten_dang_nhap,mat_khau,email,ngay_dang_ky) values('$name','$user','$pass','$email','$date')";
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
    $sql = "select * from nguoi_dung where email='" . $user . "' AND mat_khau='" . $pass . "'";
    $kq = pdo_query_one($sql);
    return $kq;
}

function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
    $sql = "update taikhoan set user='" . $user . "', pass='" . $pass . "',email='" . $email . "',address='" . $address . "',tel='" . $tel . "'where id=" . $id;
    pdo_execute($sql);
}
