<?php
function danh_sach_khoa_hoc()
{
    $sql = "SELECT * FROM khoa_hoc ORDER BY ma_khoa_hoc DESC";
    $danh_sach_khoa_hoc = getData($sql, FETCH_ALL);
    return $danh_sach_khoa_hoc;
}

function lay_khoa_hoc_theo_id($ma_khoa_hoc)
{
    $sql = "SELECT * FROM khoa_hoc WHERE ma_khoa_hoc = '$ma_khoa_hoc'";
    $course = getData($sql, FETCH_ONE);
    return $course;
}
function them_khoa_hoc($ten_khoa_hoc, $ma_loai, $thoi_gian, $thong_tin_khoa_hoc, $ke_hoach_hoc_tap, $hinh, $hoc_phi, $level)
{
    $sql = "INSERT INTO khoa_hoc(ten_khoa_hoc, ma_loai, thoi_gian, thong_tin_khoa_hoc, ke_hoach_hoc_tap, hinh, hoc_phi, level) 
                     VALUES('$ten_khoa_hoc', '$ma_loai', '$thoi_gian', '$thong_tin_khoa_hoc', '$ke_hoach_hoc_tap', '$hinh', '$hoc_phi', '$level')";
    pdo_execute($sql);
}
// function them_khoa_hoc()
// {
//     $error = '';
//     if (isset($_POST["them_khoahoc"])) {
//         $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
//         $thoi_gian = $_POST['thoi_gian'];
//         $ma_loai = $_POST['ma_loai'];
//         $hinh = $_FILES['hinh']['name'];
//         $thong_tin_khoa_hoc = $_POST['thong_tin_khoa_hoc'];
//         $ke_hoach_hoc_tap = $_POST['ke_hoach_hoc_tap'];
//         $hoc_phi = $_POST['hoc_phi'];
//         $level = $_POST['level'];

//         if (isset($_FILES["hinh"])) {
//             $target_dir = "../public/image/course/";

//             $file_name = $_FILES["hinh"]["name"];
//             $target_file = $target_dir . $file_name;

//             $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
//             $arr_type = ["jpg", "png", "jpeg", "gif"];
//             $allowUpload = true;

//             if (!in_array($file_type, $arr_type)) {
//                 $error = "Không được upload file khác định dạng jpg, jpeg, png, gif";
//                 $allowUpload = false;
//             }

//             if ($allowUpload == true) {
//                 move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
//             }
//         }elseif(!isset($_FILES["hinh"])){
//             $error = '* không được bỏ trống ảnh';
//         }

//         if (!$error) {
//             $sql = "INSERT INTO khoa_hoc(ten_khoa_hoc, ma_loai, thoi_gian, thong_tin_khoa_hoc, ke_hoach_hoc_tap, hinh, hoc_phi, level) 
//                     VALUES('$ten_khoa_hoc', $ma_loai, $thoi_gian, '$thong_tin_khoa_hoc', '$ke_hoach_hoc_tap', '$hinh', '$hoc_phi', '$level')";
//             pdo_execute($sql);
//             echo "<script>
//             window.location.href='index.php?url=danh_sach_khoa_hoc';
//                 </script>";
//             $thong_bao = 'Thêm thành công';
//         }
//     }
// }

function xoa_khoa_hoc_theo_id($ma_khoa_hoc)
{
    $sql = "DELETE FROM khoa_hoc WHERE ma_khoa_hoc = '$ma_khoa_hoc' ";
    pdo_execute($sql);
    echo "<script>
            window.location.href='index.php?url=danh_sach_khoa_hoc';
        </script>";
}

function m_edit_course()
{
    $error = [];
    if (isset($_POST["sua_khoa_hoc"])) {
        $ma_khoa_hoc = $_POST['course_id'];
        $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
        $thoi_gian = $_POST['thoi_gian'];
        $ma_loai = $_POST['ma_loai'];
        $hinh = $_POST['hinh'];
        $thong_tin_khoa_hoc = $_POST['thong_tin_khoa_hoc'];
        $ke_hoach_hoc_tap = $_POST['ke_hoach_hoc_tap'];
        $hoc_phi = $_POST['hoc_phi'];
        $level = $_POST['level'];

        $file = $_FILES['hinh'];

        if ($file['size'] > 0) {
            $target_dir = "../public/image/course/";

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
            $sql = "UPDATE khoa_hoc SET 
            ten_khoa_hoc = '$ten_khoa_hoc',
            ma_loai = '$ma_loai',
            thoi_gian = '$thoi_gian',
            thong_tin_khoa_hoc = '$thong_tin_khoa_hoc',
            ke_hoach_hoc_tap = '$ke_hoach_hoc_tap',
            hinh = '$hinh',
            hoc_phi = '$hoc_phi',
            level = '$level' WHERE ma_khoa_hoc = '$ma_khoa_hoc'";
            pdo_execute($sql);
            echo "<script>
            window.location.href='index.php?url=danh_sach_khoa_hoc';
                </script>";
            $thong_bao = 'Sửa thành công';
        }
    }
}

function danh_sach_thong_ke()
{
    $sql = "SELECT danhmuc.ma_danhmuc as ma_danhmuc, danhmuc.ten_danhmuc as ten_danhmuc, count(khoa_hoc.ma_khoa_hoc) as count_course, 
    min(khoa_hoc.hoc_phi) as min_price, max(khoa_hoc.hoc_phi) as max_price, avg(khoa_hoc.hoc_phi) as avg_price from khoa_hoc inner join danhmuc on danhmuc.ma_danhmuc = khoa_hoc.ma_loai
    group by danhmuc.ma_danhmuc order by danhmuc.ma_danhmuc desc";
    $danh_sach_thong_ke = getData($sql, FETCH_ALL);
    return $danh_sach_thong_ke;
}

function dem_khoa_hoc()
{
    $sql = "SELECT COUNT(*) as total_course FROM khoa_hoc";
    $tong_khoa_hoc = getData($sql, FETCH_ONE);
    return $tong_khoa_hoc;
}

function tong_doanh_thu_theo_thang()
{
    $sql = "SELECT MONTH(ngay_dk) as thang, sum(gia_tien) as total FROM dang_ki WHERE MONTH(ngay_dk) = MONTH(CURRENT_DATE()) AND trang_thai = 1";
    $tong_doanh_thu = getData($sql, FETCH_ONE);
    return $tong_doanh_thu;
}
