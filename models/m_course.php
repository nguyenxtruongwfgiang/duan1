<?php
// require('db.php');

function danh_sach_khoa_hoc(){
    $sql = "SELECT * FROM khoa_hoc";
    $danh_sach_khoa_hoc = getData($sql, FETCH_ALL);
    return $danh_sach_khoa_hoc;
}

?>