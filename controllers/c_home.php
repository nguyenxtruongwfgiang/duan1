<?php
require('models/m_category.php');
require('models/m_course.php');

function hien_thi_trang_chu(){
    // $page_title = 'EduBlink';
    $danh_sach_khoa_hoc = danh_sach_khoa_hoc();
    $danh_sach_danh_muc = danh_sach_danh_muc();
    include('view/client/v_home.php');
}