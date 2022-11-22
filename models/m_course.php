<?php
// require('db.php');

function danh_sach_khoa_hoc(){
    $sql = "SELECT * FROM khoa_hoc";
    $danh_sach_khoa_hoc = getData($sql, FETCH_ALL);
    return $danh_sach_khoa_hoc;
}

function get_course_by_id($course_id){
    $sql = "SELECT * FROM khoa_hoc WHERE ma_khoa_hoc = '$course_id'";
    $course = getData($sql, FETCH_ONE);
    return $course;
}
?>