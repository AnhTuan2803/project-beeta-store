<?php
if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $check_user = checkuser($email, $pass);
    if (is_array($check_user)) {
        $_SESSION['email'] = $check_user;
        header('Location: ./index.php');
    } else {
        $thongbao = "Sai tài khoản hoặc mật khẩu!";
        header('Location: ./views/v_login.php');
    }
} else {
    header('Location: ./views/v_login.php');
}
