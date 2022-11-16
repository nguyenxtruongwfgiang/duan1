<?php
require('db.php');

function danh_sach_danh_muc(){
    $sql = "SELECT * FROM danhmuc";
    $danh_sach_danh_muc = getData($sql, FETCH_ALL);
    return $danh_sach_danh_muc;
}
?>