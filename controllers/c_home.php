<?php
require('models/m_category.php');
require('models/m_course.php');

function hien_thi_trang_chu(){
    // $page_title = 'EduBlink';
    $count_student = count_student();
    $count_course = count_course();
    $count_teacher = count_teacher();
    $danh_sach_khoa_hoc = show_limit_courses();
    $danh_sach_danh_muc = show_limit_categories();
    include('view/client/v_home.php');
}