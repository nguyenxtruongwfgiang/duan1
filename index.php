<?php
session_start();
require('controllers/log_in.php');
require('controllers/c_home.php');
require('controllers/c_course.php');
include('view/client/v_header.php');
require('controllers/c_user.php');
require('controllers/c_order.php');
// include('controllers/dangky.php');
// include('./admin/controllers/accountController.php');
// include('./admin/models/account.php');
$url = isset($_GET['url']) ? $_GET['url'] : '/';

switch ($url) {
    case '/':
        hien_thi_trang_chu();
        break;
    case 'trang_chu':
        hien_thi_trang_chu();
        break;
    case 'all_courses':
        hien_thi_ds_khoa_hoc();
        break;
    case 'course_detail':
        course_detail();
        break;
    case 'register':
        enroll();
        // include('./admin/view/admin/dark/sign_up.php');
        break;
        break;
    case 'login':
        if (isset($_POST['dang_nhap'])) {
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $checkuser = checkuser($email, $pass);
            if (is_array($checkuser))
                $_SESSION['user'] = $checkuser;
            //$thongbao="Bạn đã đăng nhập thành công  !";
            //header('location: index.php');
            echo "<script>
            window.location.href='index.php';
        </script>";
        } else {
            $thongbao = "Tài khoản không tồn tại!";
        }
        include('./view/client/login.php');
        break;
    case 'logout':
        session_unset();
        echo "<script>
            window.location.href='index.php'
        </script>";
        break;
    case 'order':
        dang_ky_khoa_hoc();
        break;
    case 'complete_order':
        complete_order();
        break;
}
include('view/client/v_footer.php');
