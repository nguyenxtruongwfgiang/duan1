<?php
require('models/m_category.php');

function hien_thi_ds_danhMuc(){
    $danh_sach_danh_muc = danh_sach_danh_muc();
    include('view/category/all_category.php');
}

function them_moi_danh_muc(){
    include('view/category/add_category.php');
    them_danh_muc();
}

function xoa_danh_muc(){
    if(isset($_GET['category_id'])){
        $ma_danhmuc = $_GET['category_id'];
        xoa_danhmuc($ma_danhmuc);
    }
}

function form_sua_danhmuc()
{
    if (isset($_GET['category_id'])) {
        $ma_danhmuc = $_GET['category_id'];
        $danhmuc = lay_danhmuc_theo_id($ma_danhmuc);
    }
    include('view/category/edit_category.php');
}

function sua_danh_muc(){
    sua_danhmuc();
}
?>