<?php
require('models/m_user.php');
require('models/m_comment.php');

function enroll()
{
    $thongbao = "";
    if (isset($_POST['dangky'])) {
        $email = $_POST['email'];
        $full_name = $_POST['fullname'];
        $pass_word = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $check_email = check_exist_email($email);
        if ($confirm_password !== $pass_word) {
            $thongbao = '* Mật khẩu xác nhận phải trùng với mật khẩu';
        } elseif ($full_name == '') {
            $thongbao = '* Không được bỏ trống họ tên';
        } elseif ($email == '') {
            $thongbao = '* Không được bỏ trống email';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $thongbao = "* Email không đúng định dạng";
        } elseif (strlen($pass_word) < 8) {
            $thongbao = '* Mật khẩu phải lớn hơn 8 ký tự';
        } elseif (is_array($check_email)) {
            $thongbao = '* Email đã tồn tại';
        } else {
            insert_account($email, $full_name, $pass_word);
            $thongbao = "Đăng ký thành công !";
            echo "<script>
            window.location.href='index.php?url=login';
        </script>";
        }
    }
    include('view/client/register.php');
}

function login_form()
{
    include('view/client/login.php');
}

function post_comment(){
    $aler = '';
    if(isset($_POST['post_comment'])){
        $noi_dung = $_POST['message'];
        $ma_khoa_hoc = $_POST['ma_khoa_hoc'];
        $ma_nguoi_dung = $_POST['ma_nguoi_dung'];
        $ngay_binh_luan = date('Y-m-d', time());
        if($noi_dung == ''){
            $alert = '* vui lòng nhập bình luận';
            echo '<script>
                history.go(-1)
            </script>';
        }
        else{
            insert_comment($noi_dung, $ma_khoa_hoc, $ma_nguoi_dung, $ngay_binh_luan);
            echo "<script>
                history.go(-1)
            </script>";
        }
    }
}