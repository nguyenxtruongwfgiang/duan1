<?php
require('db.php');

function danh_sach_danh_muc(){
    $sql = "SELECT * FROM danhmuc";
    $danh_sach_danh_muc = pdo_query($sql);
    return $danh_sach_danh_muc;
}
?>