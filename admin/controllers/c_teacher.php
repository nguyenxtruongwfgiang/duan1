<?php
require('models/m_teacher.php');

function hien_thi_danh_sach_giang_vien()
{
    $danh_sach_giang_vien = danh_sach_giang_vien();
    include('view/teacher/all_teacher.php');
}

function them_giang_vien()
{

    $error = [];
    if (isset($_POST["them_gv"])) {

        $ten_giang_vien = $_POST['ten_giang_vien'];
        $hinh = $_FILES['hinh']['name'];
        $thong_tin_gv = $_POST['thong_tin_gv'];
        if (empty($ten_giang_vien)) {
            $error['name'] = '* không được bỏ trống tên';
        }
        if (empty($thong_tin_gv)) {
            $error['detail'] = '* thông tin là bắt buộc';
        }

        if (isset($_FILES["hinh"])) {
            $target_dir = "../public/image/teacher/";

            $file_name = $_FILES["hinh"]["name"];
            $target_file = $target_dir . $file_name;

            $file_type = pathinfo($file_name, PATHINFO_EXTENSION);
            // $arr_type = ["jpg", "png", "jpeg", "gif"];
            $allowUpload = true;

            // if (!in_array($file_type, $arr_type)) {
            //     $error["type_error"] = "* Không được upload file khác định dạng jpg, jpeg, png, gif";
            //     $allowUpload = false;
            // }
            if ($file_type != "jpg" && $file_type != "jpeg" && $file_type != "png" && $file_type != "gif") {
                $error["type_error"] = "* file không đúng định dạng";
                $allowUpload = false;
            }
            if ($allowUpload == true) {
                move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
            }
        }
        if (empty($_FILES["hinh"]["tmp_name"])) {
            $error["type_error"] = '* không được bỏ trống ảnh';
        }

        if (!$error) {
            add_teacher($ten_giang_vien, $hinh, $thong_tin_gv);
            echo "<script>
            window.location.href='index.php?url=danh_sach_giang_vien';
                </script>";
            $thong_bao = 'Thêm thành công';
        }
    }
    include('view/teacher/add_teacher.php');
}

function xoa_giang_vien()
{
    if (isset($_GET['teacher_id'])) {
        $ma_giang_vien = $_GET['teacher_id'];
        xoa_giang_vien_theo_id($ma_giang_vien);
    }
}

function edit_teacher_form()
{
    if (isset($_GET['teacher_id'])) {
        $teacher_id = $_GET['teacher_id'];
        $teacher = get_teacher_by_id($teacher_id);
        include('view/teacher/edit_teacher.php');
    }
}

function edit_teacher()
{
    edit_one_teacher();
}
