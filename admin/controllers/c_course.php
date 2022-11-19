<?php
require('models/m_course.php');

function get_courses(){
    $danh_sach_khoa_hoc = danh_sach_khoa_hoc();
    include('view/course/all_courses.php');
}


function them_moi_khoa_hoc(){
    include('view/course/add_courses.php');
    // $danh_sach_danh_muc = danh_sach_danh_muc();
    them_khoa_hoc();
}

function xoa_khoa_hoc(){
    if(isset($_GET['course_id'])){
        $ma_khoa_hoc = $_GET['course_id'];
        xoa_khoa_hoc_theo_id($ma_khoa_hoc);
    }
}

function form_sua_khoa_hoc(){
    if(isset($_GET['course_id'])){
        $course_id = $_GET['course_id'];
        $course = get_coure_by_id($course_id);
    }
    include('view/course/edit_course.php');
}

function edit_course(){
    m_edit_course();
}