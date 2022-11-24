<?php
require('models/m_user.php');

function enroll()
{
    $thongbao = "";
    if (isset($_POST['dangky'])) {
        $email = $_POST['email'];
        $full_name = $_POST['fullname'];
        $pass_word = $_POST['password'];
        insert_account($email, $full_name, $pass_word);
        $thongbao = "Đăng ký thành công !";
        echo "<script>
            window.location.href='index.php?url=login';
        </script>";
    }
    include('view/client/register.php');
}

function login_form(){
    include('view/client/login.php');
}