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

function sua_nguoi_dung()
{
    $error = [];
    if (isset($_POST['sua_nguoi_dung'])) {
        $ma_nguoi_dung = $_POST['ma_nguoi_dung'];
        $ho_ten = $_POST['ho_ten'];
        $hinh = $_POST['hinh'];
        $email = $_POST['email'];

        $file = $_FILES['hinh'];

        if ($file['size'] > 0) {
            $target_dir = "../public/image/user/";

            $hinh = $file['name'];
            $target_file = $target_dir . $hinh;

            $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
            $arr_type = ["jpg", "png", "jpeg", "gif"];
            $allowUpload = true;

            if (!in_array($file_type, $arr_type)) {
                $error["type_error"] = "Không được upload file khác định dạng jpg, jpeg, png, gif";
                $allowUpload = false;
            }

            if ($allowUpload == true) {
                move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
            }
        }

        if (!$error) {
            cap_nhat_nguoi_dung($ma_nguoi_dung,$email, $ho_ten, $hinh);
            echo "<script>
            window.location.href='index.php?url=hoc_vien';
                </script>";
            $thong_bao = 'Sửa thành công';
        }
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
