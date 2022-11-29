<?php

function get_class_by_class_id($course_id)
{
    $sql = "SELECT * FROM lop WHERE ma_khoa_hoc = '$course_id'";
    $class = getData($sql, FETCH_ONE);
    return $class;
}

function get_course_by_class_id($class_id)
{
    $sql = "SELECT * FROM lop as class,khoa_hoc as course WHERE class.ma_khoa_hoc = course.ma_khoa_hoc AND class.ma_lop = '$class_id'";
    $course = getData($sql, FETCH_ONE);
    return $course;
}

function return_oder($ma_lop, $ma_nguoi_dung)
{
    $sql = "SELECT COUNT(*) as KQ FROM dang_ki WHERE ma_lop = '$ma_lop' and ma_nguoi_dung = '$ma_nguoi_dung'";
    return getData($sql, FETCH_ONE);
}

function add_order_course($ngay_dk, $ma_lop, $ma_nguoi_dung, $gia_tien)
{
    $sql = "INSERT INTO dang_ki(ngay_dk,gia_tien,ma_lop,ma_nguoi_dung) VALUES ('$ngay_dk', '$gia_tien', '$ma_lop', '$ma_nguoi_dung')";
    pdo_execute($sql);
}

function send_contact_email($to, $subject, $message, $headers)
{
    mail($to, $subject, $message, $headers);
}

function get_user_by_user_id($user_id){
    $sql = "SELECT * FROM nguoi_dung WHERE ma_nguoi_dung = '$user_id'";
    $user = getData($sql, FETCH_ONE);
    return $user;
}