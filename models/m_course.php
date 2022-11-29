<?php
// require('db.php');

function danh_sach_khoa_hoc()
{
    $sql = "SELECT * FROM khoa_hoc";
    $danh_sach_khoa_hoc = getData($sql, FETCH_ALL);
    return $danh_sach_khoa_hoc;
}

function get_course_by_id($course_id)
{
    $sql = "SELECT * FROM khoa_hoc WHERE ma_khoa_hoc = '$course_id'";
    $course = getData($sql, FETCH_ONE);
    return $course;
}

function get_courses_by_category($category_id)
{
    $sql = "SELECT * FROM khoa_hoc WHERE ma_loai = '$category_id'";
    $courses = getData($sql, FETCH_ALL);
    return $courses;
}

function select_one_teacher($teacher_id)
{
    $sql = "SELECT * FROM giang_vien WHERE ma_giang_vien = '$teacher_id'";
    $teacher = getData($sql, FETCH_ONE);
    return $teacher;
}

function get_classes_by_class_id($course_id)
{
    $sql = "SELECT * FROM lop WHERE ma_khoa_hoc = '$course_id'";
    $classes = getData($sql, FETCH_ALL);
    return $classes;
}

function show_limit_courses()
{
    $sql = "SELECT * FROM khoa_hoc order by ma_khoa_hoc desc limit 4";
    $danh_sach_khoa_hoc = getData($sql, FETCH_ALL);
    return $danh_sach_khoa_hoc;
}

function get_courses_by_category_id($category_id, $course_id){
    $sql = "SELECT * FROM khoa_hoc WHERE ma_loai = '$category_id' AND ma_khoa_hoc != '$course_id' order by ma_khoa_hoc desc limit 3";
    $courses = getData($sql, FETCH_ALL);
    return $courses;
}

function return_slot(){
    $sql = "SELECT";
}