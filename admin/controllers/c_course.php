<?php
require('models/m_course.php');

function get_courses()
{
    $danh_sach_khoa_hoc = danh_sach_khoa_hoc();
    include('view/course/all_courses.php');
}


function them_moi_khoa_hoc()
{
    $error = [];
    if (isset($_POST["them_khoahoc"])) {
        $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
        $thoi_gian = $_POST['thoi_gian'];
        $ma_loai = $_POST['ma_loai'];
        $hinh = $_FILES['hinh']['name'];
        $thong_tin_khoa_hoc = $_POST['thong_tin_khoa_hoc'];
        $ke_hoach_hoc_tap = $_POST['ke_hoach_hoc_tap'];
        $hoc_phi = $_POST['hoc_phi'];
        $level = $_POST['level'];
        if (empty($ten_khoa_hoc)) {
            $error['name'] = '* không được bỏ trống tên khoá học';
        }
        if (empty($thoi_gian) || $thoi_gian <= 0) {
            $error['time'] = '* thời gian phải lớn hơn 0';
        }
        if (empty($thong_tin_khoa_hoc)) {
            $error['detail'] = '* không được bỏ trống thông tin khoá học';
        }
        if (empty($ke_hoach_hoc_tap)) {
            $error['schedule'] = '* không được bỏ trống kế hoạch học tập';
        }
        if (empty($hoc_phi) || $hoc_phi <= 0) {
            $error['price'] = '* học phí không hợp lệ';
        }
        if (empty($ma_loai)) {
            $error['category'] = '* vui lòng chọn danh mục';
        }
        if (isset($_FILES["hinh"])) {
            $target_dir = "../public/image/course/";

            $file_name = $_FILES["hinh"]["name"];
            $target_file = $target_dir . $file_name;

            $file_type = pathinfo($file_name, PATHINFO_EXTENSION);
            // $arr_type = ["jpg", "png", "jpeg", "gif"];
            $allowUpload = true;

            // if (!in_array($file_type, $arr_type)) {
            //     $error['image'] = "Không được upload file khác định dạng jpg, jpeg, png, gif";
            //     $allowUpload = false;
            // }

            // if ($allowUpload == true) {
            //     move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
            // }
            if ($file_type != "jpg" && $file_type != "jpeg" && $file_type != "png" && $file_type != "gif") {
                $error['image'] = "file không đúng định dạng";
                $allowUpload = false;
            }
            if($allowUpload == true){
                move_uploaded_file($_FILES['hinh']['tmp_name'], $target_file);
            }
        }
        if (empty($_FILES["hinh"]["tmp_name"])) {
            $error['image'] = '* không được bỏ trống ảnh';
        }

        if (!$error) {
            them_khoa_hoc($ten_khoa_hoc, $ma_loai, $thoi_gian, $thong_tin_khoa_hoc, $ke_hoach_hoc_tap, $hinh, $hoc_phi, $level);
            echo "<script>
            window.location.href='index.php?url=danh_sach_khoa_hoc';
                </script>";
            $thong_bao = 'Thêm thành công';
        }
    }
    include('view/course/add_courses.php');
    // $danh_sach_danh_muc = danh_sach_danh_muc();
}

function xoa_khoa_hoc()
{
    if (isset($_GET['course_id'])) {
        $ma_khoa_hoc = $_GET['course_id'];
        xoa_khoa_hoc_theo_id($ma_khoa_hoc);
    }
}

function form_sua_khoa_hoc()
{
    if (isset($_GET['course_id'])) {
        $course_id = $_GET['course_id'];
        $course = lay_khoa_hoc_theo_id($course_id);
    }
    include('view/course/edit_course.php');
}

function edit_course()
{
    m_edit_course();
}

function thong_ke_khoa_hoc()
{
    $danh_sach_thong_ke = danh_sach_thong_ke();
    include('view/chart/thong_ke.php');
}
