<?php
require('models/m_category.php');

function hien_thi_ds_danhMuc()
{
    $danh_sach_danh_muc = danh_sach_danh_muc();
    include('view/category/all_category.php');
}

function them_moi_danh_muc()
{
    $error = '';
    if (isset($_POST['them_danhmuc'])) {
        $ten_danhmuc = $_POST['ten_danhmuc'];

        if (empty($ten_danhmuc)) {
            $error = '* không được bỏ trống tên danh mục';
        } else {
            them_danh_muc($ten_danhmuc);
            // sql query for insert data

            echo "<script>
            window.location.href='index.php?url=danh_sach_danh_muc';
        </script>";
        }

        // if (pdo_execute($sql)) {

        //     header("Location:index.php?url=danh_sach_danh_muc");
        // }
    }
    include('view/category/add_category.php');
}

function xoa_danh_muc()
{
    if (isset($_GET['category_id'])) {
        $ma_danhmuc = $_GET['category_id'];
        xoa_danhmuc($ma_danhmuc);

        echo "<script>
            window.location.href='index.php?url=danh_sach_danh_muc';
        </script>";
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

function sua_danh_muc()
{
    if (isset($_POST['sua_danh_muc'])) {
        $ma_danhmuc = $_POST['ma_danhmuc'];
        $ten_danhmuc = $_POST['ten_danhmuc'];

        // sql query for insert data
        sua_danhmuc($ma_danhmuc, $ten_danhmuc);
        echo "<script>
            window.location.href='index.php?url=danh_sach_danh_muc';
        </script>";
        // if (pdo_execute($sql)) {

        //     header("Location:index.php?url=danh_sach_danh_muc");
        // }
    }
}
