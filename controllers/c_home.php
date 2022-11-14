<?php
require('models/m_category.php');

function hien_thi_trang_chu(){
    // $page_title = 'EduBlink';
    $danh_sach_danh_muc = danh_sach_danh_muc();
    include('view/client/v_home.php');
}