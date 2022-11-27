<?php

function get_class_by_class_id($course_id)
{
    $sql = "SELECT * FROM lop WHERE ma_khoa_hoc = '$course_id'";
    $class = getData($sql, FETCH_ONE);
    return $class;
}

function get_course_by_class_id($class_id)
{
    $sql = "SELECT * FROM lop as class,khoa_hoc as course WHERE class.ma_khoa_hoc = course.ma_khoa_hoc AND class.ma_lop = '$class_id'";
    $course = getData($sql, FETCH_ONE);
    return $course;
}

function return_oder($ma_lop, $ma_nguoi_dung)
{
    $sql = "SELECT COUNT(*) as KQ FROM dang_ki WHERE ma_lop = '$ma_lop' and ma_nguoi_dung = '$ma_nguoi_dung'";
    return getData($sql, FETCH_ONE);
}
