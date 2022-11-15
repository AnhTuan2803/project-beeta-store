<?php
    function insert_sanpham($tensp, $giasp, $hinh, $mota, $iddm)
    {
        $sql = "insert into sanpham(name,price,img,mota,iddm) values('$tensp','$giasp','$hinh','$mota','$iddm')";
        pdo_execute($sql);
    }

    function loadall_sanpham(){
        $sql = "select * from san_pham order by id_sp desc";
            $listsanpham = pdo_query($sql);
        return $listsanpham;
    }

    function delete_sanpham($id){
        $sql = "delete from san_pham where id_sp=" . $id;
        pdo_execute($sql);
    }

?>