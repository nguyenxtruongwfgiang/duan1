<?php
function danh_sach_binh_luan(){
    $sql = "SELECT * FROM binh_luan";
    $danh_sach_binh_luan = getData($sql, FETCH_ALL);
    return $danh_sach_binh_luan;
}

function xoa_binh_luan_theo_id($ma_binh_luan){
    $sql = "DELETE FROM binh_luan WHERE ma_binh_luan = '$ma_binh_luan'";
    pdo_execute($sql);
}
?>