<?php
require('models/m_order.php');
require('libs/PHPMailer-master/src/PHPMailer.php');
require('libs/PHPMailer-master/src/SMTP.php');
require('libs/PHPMailer-master/src/Exception.php');
require('libs/PHPMailer-master/src/POP3.php');
// require('libs/PHPMailer-master/src/OAuth.php');

function dang_ky_khoa_hoc()
{
    if (isset($_SESSION['user'])) {
        if (isset($_GET['class_id'])) {
            $class_id = $_GET['class_id'];
            $course = get_course_by_class_id($class_id);
            $class = get_class_by_class_id($class_id);
            include('view/client/v_order.php');
        }
    } else {
        // include('view/client/login.php');
        echo "<script>
            window.location.href='index.php?url=login'
        </script>";
    }
}

function complete_order()
{
    if (isset($_POST['complete_order'])) {
        if (isset($_POST['complete_order'])) {
            $ngay_dk = date('Y-m-d', time());
            $gia_tien = $_POST['gia_tien'];
            $ma_lop = $_POST['ma_lop'];
            $trang_thai = 0;
            if (isset($_SESSION['user'])) {
                $ma_nguoi_dung = $_SESSION['user']['ma_nguoi_dung'];
            }
            add_order_course($ngay_dk, $ma_lop, $ma_nguoi_dung, $gia_tien, $trang_thai);
            send_mail($ma_nguoi_dung, $ma_lop, $ngay_dk);
            include('view/client/order_success.php');
        }
    }
}

function send_mail($ma_nguoi_dung, $ma_lop, $ngay_dk)
{
    $user = get_user_by_user_id($ma_nguoi_dung);
    $class = get_class_by_class_id($ma_lop);
    $course = get_course_by_class_id($class['ma_lop']);
    // user information

    $to = $user['email'];
    $subject = "Congratulation !!!";
    $message = "Chúc mừng bạn " . $user['ho_ten'] . "\n" . "Đã đăng ký thành công khoá học: " . $course['ten_khoa_hoc'];
    $headers = "From: giang03yn@gmail.com" . "\r\n" .
        "CC: .'$to'";

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "giang03yn@gmail.com";
    $mail->Password = "hwbhlaoesufuqdyu";
    $mail->SetFrom('giang03yn@gmail.com');
    $mail->Subject = $subject;
    $mail->Body = "$message";
    $mail->AddAddress($to);

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $msg = "Hệ thống sẽ gửi email thông báo cho bạn";
    }
    // send_contact_email($to, $subject, $message, $headers);
}
