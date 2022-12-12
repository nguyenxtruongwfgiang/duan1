<?php
require('models/m_class.php');

function class_list()
{
    $class_list = get_class_list();
    include('view/class/all_class.php');
}

function add_class_form()
{
    $error = [];

    if (isset($_POST['dang_ky_lop'])) {
        $ten_lop = $_POST['ten_lop'];
        $ca_hoc = $_POST['ca_hoc'];
        $ngay_khai_giang = date('Y-m-d', strtotime($_POST['ngay_khai_giang']));
        $dia_diem_hoc = $_POST['dia_diem_hoc'];
        $ma_khoa_hoc = $_POST['ma_khoa_hoc'];
        $ma_giang_vien = $_POST['ma_giang_vien'];
        $so_cho = $_POST['so_cho'];
        if (empty($ten_lop)) {
            $error['class_name'] = '* không được bỏ trống tên lớp';
        }
        if (empty($ca_hoc)) {
            $error['shift'] = '* không được bỏ trống ca học';
        }
        if (strlen(strtotime($ngay_khai_giang))) {
            $error['date'] = '* chọn ngày khai giảng';
        }
        if (empty($dia_diem_hoc)) {
            $error['location'] = '* vui lòng điền địa điểm học';
        }
        if (empty($ma_khoa_hoc)) {
            $error['course_id'] = '* vui lòng chọn khoá học';
        }
        if (empty($ma_giang_vien)) {
            $error['teacher_id'] = '* vui lòng chọn giảng viên';
        }
        if (empty($so_cho)) {
            $error['slot'] = '* vui lòng nhập số chỗ';
        } else {
            add_class($ten_lop, $ca_hoc, $ngay_khai_giang, $dia_diem_hoc, $ma_khoa_hoc, $ma_giang_vien, $so_cho);
            echo "<script>
            window.location.href='index.php?url=all_classes';
        </script>";
        }
    }
    include('view/class/add_class.php');
}

function delete_class()
{
    if (isset($_GET['class_id'])) {
        $class_id = $_GET['class_id'];
        delete_class_by_id($class_id);
    }
}

function edit_class_form()
{
    if (isset($_GET['class_id'])) {
        $class_id = $_GET['class_id'];
        $class = get_class_by_id($class_id);
        include('view/class/edit_class.php');
    }
}

function update_class()
{
    if (isset($_POST['edit_class'])) {
        $ma_lop = $_POST['ma_lop'];
        $ten_lop = $_POST['ten_lop'];
        $ca_hoc = $_POST['ca_hoc'];
        $ngay_khai_giang = date('Y-m-d', strtotime($_POST['ngay_khai_giang']));
        $dia_diem_hoc = $_POST['dia_diem_hoc'];
        $ma_khoa_hoc = $_POST['ma_khoa_hoc'];
        $ma_giang_vien = $_POST['ma_giang_vien'];
        $so_cho = $_POST['so_cho'];

        edit_class($ma_lop, $ten_lop, $ca_hoc, $ngay_khai_giang, $dia_diem_hoc, $ma_khoa_hoc, $ma_giang_vien, $so_cho);
        echo "<script>
            window.location.href='index.php?url=all_classes';
        </script>";
    }
}
