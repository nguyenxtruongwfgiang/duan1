<?php
include('view/header.php');
require('controllers/c_student.php');
require('controllers/c_user.php');
require('controllers/c_category.php');
require('controllers/c_course.php');
require('controllers/c_teacher.php');
require('controllers/c_class.php');


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
        //end course
        //start teacher
    case 'danh_sach_giang_vien':
        hien_thi_danh_sach_giang_vien();
        break;
    case 'them_giang_vien':
        them_giang_vien();
        break;
    case 'xoa_giang_vien':
        xoa_giang_vien();
        break;
    case 'form_sua_giang_vien':
        edit_teacher_form();
        break;
    case 'sua_giang_vien':
        edit_teacher();
        break;
        // end teacher
        //start class
    case 'all_classes':
        class_list();
        break;
    case 'add_class':
        add_class_form();
        break;
    case 'delete_class':
        delete_class();
        break;
    case 'edit_class_form':
        edit_class_form();
        break;
    case 'update_class':
        update_class();
        break;
    case 'thong_ke_sp':
        thong_ke_khoa_hoc();
        break;
    case 'bieu_do_thong_ke':
        bieu_do_thong_ke();
        break;
    case 'xoa_nguoi_dung':
        xoa_nguoi_dung();
        break;
    case 'form_sua_nguoi_dung':
        form_sua_nguoi_dung();
        break;
}

include('view/footer.php');
