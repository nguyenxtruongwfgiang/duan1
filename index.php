<?php
require('controllers/c_home.php');
require('controllers/c_course.php');
include('view/client/v_header.php');

$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url){
    case '/':
        hien_thi_trang_chu();
        break;
    case 'trang_chu':
        hien_thi_trang_chu();
        break;
    case 'khoa_hoc':
        hien_thi_ds_khoa_hoc();
        break;
    case 'course_detail':
        course_detail();
        break;

}

include('view/client/v_footer.php');
