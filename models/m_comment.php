<?php
function insert_comment($noi_dung, $ma_khoa_hoc, $ma_nguoi_dung, $ngay_binh_luan){
    $sql = "INSERT INTO binh_luan(noi_dung, ma_khoa_hoc, ma_nguoi_dung, ngay_binh_luan) VALUES('$noi_dung', '$ma_khoa_hoc', '$ma_nguoi_dung', '$ngay_binh_luan')";
    pdo_execute($sql);
}

function get_comments_by_course_id($course_id){
    $sql = "SELECT * FROM binh_luan WHERE ma_khoa_hoc = '$course_id'";
    $comments = getData($sql, FETCH_ALL);
    return $comments;
}
