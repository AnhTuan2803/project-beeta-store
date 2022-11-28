<?php
    function loadall_binhluan()
    {
        if(isset($_GET['trang'])){
            $page = $_GET['trang'];
        }else{
            $page ="";
        }
        if($page =="" || $page == 1){
            $begin = 0;
        }else{
            $begin = ($page*5)-5;
        }
        $sql = "select * from binh_luan order by id desc limit $begin,5";
        $listbinhluan = pdo_query($sql);
        return $listbinhluan;
    }
    function phantrang_bl()
    {
        $sql = "select * from binh_luan order by id desc";
        $phantrang_bl = pdo_query($sql);
        return $phantrang_bl;
    }
    function delete_binhluan($id){
        $sql = "delete from `binh_luan` where id=" . $id;
        pdo_execute($sql);
    }
?>