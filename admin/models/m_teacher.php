<?php

function danh_sach_giang_vien()
{
    $sql = "SELECT * FROM giang_vien";
    $danh_sach_giang_vien = getData($sql, FETCH_ALL);
    return $danh_sach_giang_vien;
}

function get_teacher_by_id($teacher_id)
{
    $sql = "SELECT * FROM giang_vien WHERE ma_giang_vien = '$teacher_id'";
    $teacher = getData($sql, FETCH_ONE);
    return $teacher;
}

function add_teacher()
{
    $error = [];
    if (isset($_POST["them_gv"])) {

        $ten_giang_vien = $_POST['ten_giang_vien'];
        $hinh = $_FILES['hinh']['name'];
        $thong_tin_gv = $_POST['thong_tin_gv'];

        if (isset($_FILES["hinh"])) {
            $target_dir = "../public/image/teacher/";

            // $file_name = $_FILES["hinh"]["name"];
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
            $sql = "INSERT INTO giang_vien (ten_giang_vien, hinh, thong_tin_gv)
            VALUES ('$ten_giang_vien', '$hinh', '$thong_tin_gv')";
            pdo_execute($sql);
            echo "<script>
            window.location.href='index.php?url=danh_sach_giang_vien';
                </script>";
            $thong_bao = 'Thêm thành công';
        }
    }
    // if (isset($thong_bao))  echo $thong_bao;
}

function xoa_giang_vien_theo_id($ma_giang_vien)
{
    $sql = "DELETE FROM giang_vien WHERE ma_giang_vien = '$ma_giang_vien' ";
    pdo_execute($sql);
    echo "<script>
            window.location.href='index.php?url=danh_sach_giang_vien';
        </script>";
}

function edit_one_teacher()
{

    $error = [];
    if (isset($_POST["sua_gv"])) {
        $ma_giang_vien = $_POST['ma_giang_vien'];
        $ten_giang_vien = $_POST['ten_giang_vien'];
        $thong_tin_gv = $_POST['thong_tin_gv'];
        $hinh = $_POST['hinh'];

        $file = $_FILES['hinh'];

        if ($file['size'] > 0) {
            $target_dir = "../public/image/teacher/";

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
            $sql = "UPDATE giang_vien SET
            ten_giang_vien = '$ten_giang_vien',
            hinh = '$hinh',
            thong_tin_gv = '$thong_tin_gv' WHERE ma_giang_vien = '$ma_giang_vien'";
            pdo_execute($sql);
            echo "<script>
            window.location.href='index.php?url=danh_sach_giang_vien';
                </script>";
        }
    }
    // if (isset($thong_bao))  echo $thong_bao;


}
