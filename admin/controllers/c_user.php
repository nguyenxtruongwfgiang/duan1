<?php
require('models/m_user.php');

function hien_thi_hoc_vien()
{
    $users = get_users();
    include('view/user/dashboard.php');
}

function xoa_nguoi_dung()
{
    if (isset($_GET['ma_nguoi_dung'])) {
        $ma_nguoi_dung = $_GET['ma_nguoi_dung'];
        xoa_nguoi_dung_theo_id($ma_nguoi_dung);
        echo "<script>
            window.location.href='index.php?url=hoc_vien'
        </script>";
    }
}

function form_sua_nguoi_dung()
{
    if (isset($_GET['ma_nguoi_dung'])) {
        $ma_nguoi_dung = $_GET['ma_nguoi_dung'];
        $nguoi_dung = lay_nguoi_dung_theo_id($ma_nguoi_dung);
        include('view/user/sua_user.php');
    }
}

function hien_thi_dashboard()
{
    $danh_sach_thong_ke = danh_sach_thong_ke();
    $tong_hoc_vien = dem_hoc_vien();
    $tong_khoa_hoc = dem_khoa_hoc();
    $tong_doanh_thu = tong_doanh_thu_theo_thang();
    include('view/chart/bieu_do.php');
}
