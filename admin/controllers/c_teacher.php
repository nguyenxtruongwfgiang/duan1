<?php
require('models/m_teacher.php');

function hien_thi_danh_sach_giang_vien(){
    $danh_sach_giang_vien = danh_sach_giang_vien();
    include('view/teacher/all_teacher.php');
}

function them_giang_vien(){
    include('view/teacher/add_teacher.php');
    add_teacher();
}

function xoa_giang_vien(){
    if(isset($_GET['teacher_id'])){
        $ma_giang_vien = $_GET['teacher_id'];
        xoa_giang_vien_theo_id($ma_giang_vien);
    }
}

function edit_teacher_form(){
    if(isset($_GET['teacher_id'])){
        $teacher_id = $_GET['teacher_id'];
        $teacher = get_teacher_by_id($teacher_id);
        include('view/teacher/edit_teacher.php');
    }
}

function edit_teacher(){
    edit_one_teacher();
}
?>