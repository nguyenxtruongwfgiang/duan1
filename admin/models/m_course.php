<?php
function danh_sach_khoa_hoc()
{
    $sql = "SELECT * FROM khoa_hoc";
    $danh_sach_khoa_hoc = getData($sql, FETCH_ALL);
    return $danh_sach_khoa_hoc;
}

function them_khoa_hoc()
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

        if (isset($_FILES["hinh"])) {
            $target_dir = "../public/image/course/";

            $file_name = $_FILES["hinh"]["name"];
            $target_file = $target_dir . $file_name;

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
            $sql = "INSERT INTO khoa_hoc(ten_khoa_hoc, ma_loai, thoi_gian, thong_tin_khoa_hoc, ke_hoach_hoc_tap, hinh, hoc_phi, level) 
                    VALUES('$ten_khoa_hoc', $ma_loai, $thoi_gian, '$thong_tin_khoa_hoc', '$ke_hoach_hoc_tap', '$hinh', '$hoc_phi', '$level')";
            pdo_execute($sql);
            echo "<script>
            window.location.href='index.php?url=danh_sach_khoa_hoc';
                </script>";
            $thong_bao = 'Thêm thành công';
        }
    }
    // if (isset($thong_bao))  echo $thong_bao;
}

function xoa_khoa_hoc_theo_id($ma_khoa_hoc){
    $sql = "DELETE FROM khoa_hoc WHERE ma_khoa_hoc = '$ma_khoa_hoc' ";
    pdo_execute($sql);
    echo "<script>
            window.location.href='index.php?url=danh_sach_khoa_hoc';
        </script>";
}