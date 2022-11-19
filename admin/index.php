<?php
include('view/header.php');
include('controllers/c_student.php');
include('controllers/c_dashboard.php');
include('controllers/c_category.php');
include('controllers/c_course.php');


$url = isset($_GET['url']) ? $_GET['url'] : '/';
switch ($url) {
    case '/':
        hien_thi_dashboard();
        break;
    case 'hoc_vien':
        hien_thi_dashboard();
        break;
    case 'them_moi_hoc_vien':
        them_moi_hoc_vien();
        break;

    // danh mục
    case 'danh_sach_danh_muc':
        hien_thi_ds_danhMuc();
        break;
    case 'them_danh_muc':
        them_moi_danh_muc();
        break;
    case 'xoa_danhmuc':
        xoa_danh_muc();
        break;

    case 'form_sua_danhmuc':
        form_sua_danhmuc();
        break;

    case 'sua_danh_muc':
        sua_danh_muc();
        break;

    //end danh mục
    case 'danh_sach_khoa_hoc':
        get_courses();
        break;
    case 'them_khoa_hoc':
        them_moi_khoa_hoc();
        break;
    case 'xoa_khoa_hoc':
        xoa_khoa_hoc();
        break;
    case 'form_sua_khoa_hoc':
        form_sua_khoa_hoc();
        break;
    case 'edit_course':
        edit_course();
        break;
}

include('view/footer.php');
